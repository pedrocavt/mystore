<?php 
    
    include 'conexao.php';

    $nome_user = $_POST['nome_user'];
    $sobrenome_user = $_POST['sobrenome_user'];
    $email_user = $_POST['email_user'];
    $senha_user = $_POST['senha_user'];
    $endereco_user = $_POST['endereco_user'];
    $cidade_user = $_POST['cidade_user'];
    $cep_user = $_POST['cep_user'];

    $remover = array('-', ' ');
    $cep_user = str_replace($remover, '', $cep_user); //removendo a mascara do cep

   $consulta = $conexao->query("SELECT email_user from clientes WHERE email_user = '$email_user'");

   if ($consulta->rowCount()==1){

    header("location: erro1.php");

   }
   else{

    try{

        $include=$conexao->query("INSERT INTO `clientes`(`nome_user`, `sobrenome_user`, `email_user`, `senha_user`,`endereco_user`, `cidade_user`, `cep_user`,`adm`) 
      VALUES('$nome_user','$sobrenome_user,','$email_user','$senha_user','$endereco_user','$cidade_user','$cep_user', '0')");
    
    header("location: right.php");

    } catch(PDOException $e){ //caso aja algum problema
        
        echo $e->getMessage();
    
    }

}

?>