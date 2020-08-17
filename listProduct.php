<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
    <?php 

        session_start();

        if($_SESSION['adm'] != 1){
            header('location: index.php');
        }

        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';
    
        $consulta = $conexao ->query("SELECT * FROM produtos");

    ?>

<div class="container-fluid">

<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
    <div class="row" style="width:100%;">
    
        <div class="col-sm-2 align-self-center" style="margin-left:auto">
            <img src="img/<?php echo $exibe['imagem_produto1'] ?>" width="100%" alt="">
        </div>

        <div class="col-sm-3 align-self-center">
            <h4><?php echo $exibe['nome_produto'] ?></h4>
        </div>

        <div class="col-sm-2 align-self-center">
            <h3><?php echo number_format($exibe['preco_produto'],2,',','.') ?></h3>
        </div>
        
        <div class="col-sm-2 align-self-center" style="margin:0 auto">
            <a href="update.php?id=<?php echo $exibe['id'] ?>" style="text-decoration:none">
                <button class="btn btn-lg btn-block" style="background-color:orange;color:white; margin-top:10px">
                <i class="far fa-edit"></i>&nbsp;Alterar
                </button>
            </a>

            <a href="delete.php?id=<?php echo $exibe['id'] ?>" style="text-decoration:none">
            <button class="btn btn-lg btn-block" style="background-color:red;color:white; margin-top:10px">
            <i class="far fa-trash-alt"></i>&nbsp;Excluir
            </button>
        </a>
        </div>
    </div>

<?php } ?>

</div>



<div>
<?php
    include 'rodape.html';
?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>