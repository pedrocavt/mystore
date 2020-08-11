<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Colchões</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>    
<?php 

    session_start();

    include 'conexao.php';
    include 'nav.php'; 
    include 'cabecalho.html';

    $id_produto = $_GET['id'];

    $consulta = $conexao->query("SELECT * FROM produtos WHERE id = '$id_produto'");

    $exibir = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<div class="container-fluid">
    <div class="row" style="margin-top:20px">
    
                <div class="col-sm-4" style="margin-left:auto">
                    <img src="img/<?php echo $exibir['imagem_produto']; ?>" class="img-responsive" style="width:100%;">
                    
                    <div class="row" style="margin-top:10px">
                    <div class="col-sm-4" style="margin-left:auto">
                            <img src="img/<?php echo $exibir['imagem_produto']; ?>" class="img-responsive" style="width:100%;">
                        </div>
                        <div class="col-sm-4" style="margin-right:auto">
                            <img src="img/<?php echo $exibir['imagem_produto']; ?>" class="img-responsive" style="width:100%;">
                        </div>
                    </div>

                </div>

                <div class="col-sm-4"  style="margin-right:auto">
                    
                    <h1><?php echo $exibir['nome_produto']?></h1>
                    
                    <h4><?php echo $exibir['descricao_produto']?></h4>
                    
                    <h5><?php echo $exibir['marca_produto']?></h5>
                    
                    <h2 style="margin-top: 70px;">R$ <?php echo number_format($exibir['preco_produto'],2,',','.'); ?></h2>

                    <?php if ($exibir['quantidade_produto'] > 0) { ?>

                    <button class="btn btn-lg btn-block" style="background-color:#0d4e2b;color:white;float:right">
                    <i class="fas fa-shopping-cart"></i>&nbsp;Comprar
                    </button>
                        <?php } else{ ?>

                    <button class="btn btn-lg btn-block" style="background-color:#46010a;color:white;float:right; cursor:default">
                    <i class="fas fa-exclamation-triangle"></i>&nbsp;Indisponível
                    </button>
                        <?php } ?>  
                
                </div>
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