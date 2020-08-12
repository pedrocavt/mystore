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
    include 'conexao.php';
    include 'nav.php';
?>
    <center style="margin-top:20px;color:white">
        <h1 class="display-4" id="title">Cadastro</h1>
    </center>

    <div class="col-sm-4 sombra" >
        <form method="POST" action="inserirUser.php" >
            
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Nome</label>
                <input  type="text" name="nome_user" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Sobrenome</label>
                <input type="text" name="sobrenome_user" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Email</label>
                <input type="email" name="email_user" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="anton">Senha</label>
                <input type="password" name="senha_user" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Endereço</label>
                <textarea name="endereco_user" class="form-control" rows="3" required autocomplete="off"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">Cidade</label>
                <input type="text" name="cidade_user" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="anton">CEP</label>
                <input type="text" name="cep_user" class="form-control" id="cep" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


<script>
    $(document).ready(function(){
        $("#cep").mask("00000-000")
    });

</script>
<script src="jquery.mask/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>