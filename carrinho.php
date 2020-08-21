<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Colchões</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body >    
<?php 

    session_start();

    if(empty($_SESSION['id'])){
        header('location:formLogon.php');
    }

    include 'conexao.php';
    include 'nav.php'; 

    if(!empty($_GET['id'])){

        $id_produto = $_GET['id'];

        if(!isset($_SESSION['carrinho'])){
            $_SESSION['carrinho'] = array();
        }
        
        
        if(!isset($_SESSION['carrinho'][$id_produto])){
            $_SESSION['carrinho'][$id_produto]=1;
        }
        else{
            $_SESSION['carrinho'][$id_produto]+=1;
        }
        include 'showcar.php';
    }
    else{
        include 'showcar.php';
    }
?>

    <div class="row text-center">
        <h1 style="margin:0 auto">Total: R$ <?php echo number_format($total,2,',','.');?></h1>
    </div>

    <div class="row text-center">
    <div class="col-sm-2" style="margin-left: auto">
        <a href="index.php">
        <button class="btn btn-block btn-primary">Continuar Comprando</button></a>
    </div>
        
        <div class="col-sm-2" style="margin-right: auto">
        <?php if(count($_SESSION['carrinho']) > 0) { ?>
        <a href="finishbuy.php" >
        <button class="btn btn-block btn-success">Finalizar Comprar</button>
        </a>
        <?php } ?>
        </div>
    </div>


<div>
    <?php include 'rodape.html'; ?>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>