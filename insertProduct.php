<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
    <center style="margin-top:20px;color:white">
        <h1 class="display-4" id="title">Cadastrar Produto</h1>
    </center>

    <div class="col-sm-4 sombra" >
        <form method="POST" action="_insertProduct.php" >
            
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Produto</label>
                <input  type="text" name="nome_produto" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Marca</label>
               <select name="marca_produto" class="form-control">
                    <option value="Ortobonn">Ortobonn</option>
                    <option value="ColchãoTop">ColchãoTop</option>
                    <option value="CamaDaoras">CamaDaoras</option>
               </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Descrição</label>
                <textarea name="descricao_produto" class="form-control" rows="3" required autocomplete="off"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Quantidade</label>
                <input type="number" name="quantidade_produto" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Preço</label>
                <input type="text" name="preco_produto" class="form-control" id="preco" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Primeira Foto</label>
                <input type="file" name="imagem_produto1" accept="image/*" class="form-control" id="imagem_produto1" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Segunda Foto</label>
                <input type="file" name="imagem_produto2" class="form-control" accept="image/*" id="imagem_produto2" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Terceira Foto</label>
                <input type="file" name="imagem_produto2" class="form-control" accept="image/*" id="imagem_produto2" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


<script>
    $(document).ready(function(){
        $("#preco").mask("0.000.000.000,00", {reverse:true})
    });

</script>
<script src="jquery.mask/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>