<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .formLogon {
    margin: 25px auto;
    }
    #register{
        float:right;
    }
</style>
</head>
<body>
    <?php 
        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';
    ?>
<div class="container-fluid">
<div class=row>
    <div class="col-sm-4 formLogon" >
        <form method="POST" action="validates_logon.php" >
            <center>
            <h3>Cliente</h3>
            </center>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email_user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="senha_user" class="form-control" required>
            </div>
            <div class="form-group form-check">
                
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a id="register" href="#">Ainda não sou cadastrado</a>
        </form>
    </div>
</div>
</div>

<div>
    <?php include 'rodape.html'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>