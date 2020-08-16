<?php 

    include 'conexao.php';
    include 'resize-class.php';

    //pega os valores e coloca em uma variavel
    $nome_produto = $_POST['nome_produto'];
    $marca_produto = $_POST['marca_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $preco_produto = $_POST['preco_produto'];
    // pega as imagens e coloca em uma variável
    $imagem_produto1 = $_FILES['imagem_produto1'];
    $imagem_produto2 = $_FILES['imagem_produto2'];
    $imagem_produto3 = $_FILES['imagem_produto3'];
    //remove a mascara do preco
    $removerp = '.';
    $preco_produto = str_replace($removerp, '', $preco_produto); 
    $removerv = ',';
    $preco_produto = str_replace($removerv, '.', $preco_produto);

    $destino = "img/";
    // formata a extensao
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto1['name'], $extensao1);
    $imagem1 = md5(uniqid(time())).".".$extensao1[1]; //formata o nome
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto2['name'], $extensao2);
    $imagem2 = md5(uniqid(time())).".".$extensao2[1];
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto3['name'], $extensao3);
    $imagem3 = md5(uniqid(time())).".".$extensao3[1];

    try{

        $insert = $conexao->query("INSERT INTO `produtos`(`nome_produto`, `preco_produto`, `descricao_produto`, `marca_produto`, `imagem_produto1`, `imagem_produto2`, `imagem_produto3`, `quantidade_produto`) VALUES ('$nome_produto','$preco_produto','$descricao_produto','$marca_produto','$imagem1','$imagem2','$imagem3','$quantidade_produto')");
        
        move_uploaded_file($imagem_produto1['tmp_name'], $destino.$imagem1);
        $resizeObj = new resize($destino.$imagem1);
        $resizeObj -> resizeImage(500, 500, 'crop');
        $resizeObj -> saveImage($destino.$imagem1, 100);

        move_uploaded_file($imagem_produto2['tmp_name'], $destino.$imagem2);
        $resizeObj = new resize($destino.$imagem2);
        $resizeObj -> resizeImage(500, 500, 'crop');
        $resizeObj -> saveImage($destino.$imagem2, 100);

        move_uploaded_file($imagem_produto3['tmp_name'], $destino.$imagem3);
        $resizeObj = new resize($destino.$imagem3);
        $resizeObj -> resizeImage(500, 500, 'crop');
        $resizeObj -> saveImage($destino.$imagem3, 100);

        header('location: administrador.php');
    }
    catch(PDOException $e){

        echo $e->getMessage();

    }

?>