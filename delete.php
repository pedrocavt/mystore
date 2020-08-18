<?php 

    include 'conexao.php';
    $id_produto = $_GET['id'];

    $local = "img/";

    $consulta = $conexao->query("SELECT * FROM produtos WHERE id = '$id_produto'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $delete = $conexao->query("DELETE FROM produtos WHERE id = '$id_produto'");

    $imagem1 = $exibe['imagem_produto1'];
    $imagem2 = $exibe['imagem_produto2'];
    $imagem3 = $exibe['imagem_produto3'];

    if($imagem1 != ""){

        unlink($local.$imagem1);
    }
    if($imagem1 != ""){

        unlink($local.$imagem2);
    }
    if($imagem1 != ""){

        unlink($local.$imagem3);
    }

    header("location: listProduct.php");
?>