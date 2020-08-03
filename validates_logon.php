<?php 

    session_start();

    include 'conexao.php';

    $email_user = $_POST['email_user'];
    $senha_user = $_POST['senha_user'];

    // echo $email_user;
    // echo $senha_user;

    $consulta = $conexao->query("SELECT id_user, email_user, senha_user, adm FROM clientes WHERE email_user='$email_user' AND senha_user='$senha_user'");
    
    if($consulta->rowCount()==1){

        $show_user=$consulta->fetch(PDO::FETCH_ASSOC);

        if($show_user['adm'] == 0){


        $_SESSION['id'] = $show_user['id_user'];
        $_SESSION['adm']=0;

        header("location: index.php");

        }

        else{

            $_SESSION['id'] = $show_user['id_user'];
            $_SESSION['adm']=1;
    
            header("location: index.php");

        }


    }

    else{

      header('location:erro.php');

    }

?>