<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
    <?php
    
        session_start();

        include 'conexao.php';
        include "nav.php";
        include 'cabecalho.html';

        $recebe_search = $_GET['search'];

        if($recebe_search == ""){

            header('location: index.php');
        }

        $consulta = $conexao->query("SELECT * FROM produtos WHERE nome_produto LIKE CONCAT ('%', '$recebe_search', '%')");
        
        if($consulta -> rowCount() == 0){

            header("location: erro2.php");

        }
    ?>

<div class="container-fluid">

<?php 

    while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ 
?>
    <div class="row " style="margin-top:30px; width:100%;">
    
        <div class="col-sm-2 col-sm-offset-1"  style="margin-left:auto;">
            <img class="img-fluid" src="img/<?php echo $exibe['imagem_produto1'] ;?>">
        </div>
        <div class="col-sm-3 align-self-center">
            <h4><?php echo $exibe['nome_produto']; ?></h4>
        </div>
        <div class="col-sm-2 align-self-center">
            <h3><?php echo number_format($exibe['preco_produto'],2,',','.') ;?></h3>
        </div>
        <div class="col-sm-2 align-self-center" style="margin-right:auto;">
            <a href="detalhesProduto.php?id=<?php echo $exibe['id']; ?>">
                <button class="btn btn-lg btn-block" style="background-color:#7c7f86;color:white">
                    <i class="fas fa-info-circle"></i>&nbsp;Detalhes
                </button>
            </a>

            <?php if ($exibe['quantidade_produto'] > 0) { ?>

            <button class="btn btn-lg btn-block" style="background-color:#0d4e2b;color:white; margin-top:10px">
                <i class="fas fa-shopping-cart"></i>&nbsp;Comprar
            </button>

            <?php } else{ ?>

            <button class="btn btn-lg btn-block" style="background-color:#46010a;color:white; cursor:default; margin-top:10px">
                <i class="fas fa-exclamation-triangle"></i>&nbsp;Indispo...
            </button>
    
            <?php } ?>
                
        </div>
        
    </div>
    <?php } ?>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>