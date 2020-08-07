<?php 

    session_start();

    include 'conexao.php';

    $email_user = $_POST['email_user'];
    $senha_user = $_POST['senha_user'];


    $consulta = $conexao->query("SELECT id_user, email_user, senha_user, adm FROM clientes WHERE email_user='$email_user' AND senha_user='$senha_user'");
    
    if($consulta->rowCount()==1){ //verifica se o usurio existe

        $show_user=$consulta->fetch(PDO::FETCH_ASSOC);  //pega os dados 
 
        if($show_user['adm'] == 0){  //verifica se é administrador


        $_SESSION['id'] = $show_user['id_user']; //pega o id do banco e coloca na sessao
        $_SESSION['adm']=0; //coloca o valor de adm na sessao

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