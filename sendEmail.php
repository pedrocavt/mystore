<?php 

    include 'conexao.php';

    $email_user = $_POST['email_user'];

    $consulta = $conexao->query("SELECT nome_user, senha_user,email_user FROM clientes WHERE email_user ='$email_user'");

    if($consulta->rowCount() == 0){

        header('location: erro2.php');
    }
    else{

        echo "email cadastrado";
    }
?>