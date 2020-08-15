<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
   <!-- CSS only -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body class="backg">    
<?php 

    session_start();

    if ($_SESSION['adm'] != 1){
        
        header('location:index.php');
    }

    include 'conexao.php';
    include 'nav.php'; 

?>
    <center style="margin-top:80px;color:white">
        <h1 class="display-4" id="title">Administração</h1>
    </center>

<div class="container-fluid">

    <div class="row">

        <div class="col-sm-5 text-center" style="margin: 50px auto">

            <a href="insertProduct.php">
                <button class="btn btn-lg btn-block" style="background-color:#3f00ff;color:white;margin-bottom: 10px">
                    <i class="fas fa-cloud-upload-alt"></i>&nbsp;Inserir Produto
                </button>
            </a>
            <button class="btn btn-lg btn-block" style="background-color:#ffa500c9;color:white">
                <i class="fas fa-edit"></i>&nbsp;Alterar ou Excluir
            </button>

            <button class="btn btn-lg btn-block" style="background-color:#0d4e2b;color:white">
                <i class="fas fa-shopping-cart"></i></i>&nbsp;Vendas
            </button>

        </div>
    
    </div>

</div>




<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>