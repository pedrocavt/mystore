<?php 

    include 'conexao.php';
    include 'resize-class.php';

    $id_produto = $_GET['id'];

    $consulta = $conexao->query("SELECT * FROM produtos WHERE id='$id_produto'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $nome_produto = $_POST['nome_produto'];
    $marca_produto = $_POST['marca_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $preco_produto = $_POST['preco_produto'];

    $removerp = '.';
    $preco_produto = str_replace($removerp, '', $preco_produto);
    $removerv = ',';
    $recebe_preco = str_replace($removerv, '.', $preco_produto);

    $imagem_produto1 = $_FILES['imagem_produto1'];
    $imagem_produto2 = $_FILES['imagem_produto2'];
    $imagem_produto3 = $_FILES['imagem_produto3'];

    $destino = "img/";

    if (!empty($imagem_produto1['name'])){
        
        preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem_produto1['name'],$extensao1);
        $imagem1 = md5(uniqid(time())).".".$extensao1[1];
        
        $upload1 = 1;
    }
    else{

        $imagem1=$exibe['imagem_produto1'];
        $upload1 = 0;

    }

    if (!empty($imagem_produto2['name'])){

        preg_match("/\.(jpg|jpeg|png|gif){1}$/i", $imagem_produto2['name'], $extensao2);
        $imagem2 = md5(uniqid(time())).".".$extensao2[1];
            
        $upload2 = 1;
    }
    else{

        $imagem2=$exibe['imagem_produto2'];
        $upload2 = 0;

    }

    if (!empty($imagem_produto3['name'])){

        preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$imagem_produto3['name'],$extensao3);
        $imagem3 = md5(uniqid(time())).".".$extensao3[1];
        
            
        $upload3 = 1;
    }
    else{

    $imagem3=$exibe['imagem_produto3'];
    $upload3 = 0;

    }

    try{
        $update = $conexao->query("UPDATE produtos SET

            nome_produto = '$nome_produto',
            preco_produto = '$preco_produto',
            descricao_produto = '$descricao_produto',
            marca_produto = '$marca_produto',
            imagem_produto1 = '$imagem1',
            imagem_produto2 = '$imagem2',
            imagem_produto3 = '$imagem3',
            quantidade_produto = '$quantidade_produto'

            WHERE id = '$id_produto'
        
        ");

        if($upload1 == 1){
            move_uploaded_file($imagem_produto1['tmp_name'], $destino.$imagem1);
            $resizeObj = new resize($destino.$imagem1);
            $resizeObj -> resizeImage(500, 500, 'crop');
            $resizeObj -> saveImage($destino.$imagem1, 100);
        }
        
        if($upload2 == 1){
            move_uploaded_file($imagem_produto2['tmp_name'], $destino.$imagem2);
            $resizeObj = new resize($destino.$imagem2);
            $resizeObj -> resizeImage(500, 500, 'crop');
            $resizeObj -> saveImage($destino.$imagem2, 100);
        }
        
        if($upload3 == 1){
            move_uploaded_file($imagem_produto3['tmp_name'], $destino.$imagem3);
            $resizeObj = new resize($destino.$imagem3);
            $resizeObj -> resizeImage(500, 500, 'crop');
            $resizeObj -> saveImage($destino.$imagem3, 100);
        }

        header('location: administrador.php');

    }catch(PDOExeception $e){

        echo $e->getMessage();

    }


?>