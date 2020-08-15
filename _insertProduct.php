<?php 

    include 'conexao.php';
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
    $preco_produto = str_replace($removev, '.', $preco_produto);

    $destino = "upload/";
    //formata a extensao
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto1['name'], $extensao1);
    $imagem1 = md5(uniqid(time())).".".$extensao1[1]; //formata o nome
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto2['name'], $extensao2);
    $imagem2 = md5(uniqid(time())).".".$extensao2[1];
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto3['name'], $extensao3);
    $imagem3 = md5(uniqid(time())).".".$extensao3[1];

    try{

        $insert = $conexao->query("INSERT INTO `produtos`(`nome_produto`, `preco_produto`, `descricao_produto`, `marca_produto`, `imagem_produto1`, `imagem_produto2`, `imagem_produto3`, `quantidade_produto`) VALUES ('$nome_produto','$preco_produto','$descricao_produto','$marca_produto','$imagem1','$imagem2','$imagem3','$quantidade_produto')");
    
    }
    catch(PDOException $e){

        echo $e->getMessage();

    }

?>