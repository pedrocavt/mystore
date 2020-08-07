<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background-color: #b70d23;
        }
        .forget {
            margin:20px auto;
            box-shadow: -2px 7px 22px -5px rgba(0,0,0,0.75);
            padding: 10px;
            border-radius: 10px;
            background-color:white;
        }	
        .anton {
            font-family: 'Anton', sans-serif;
        }
    </style>
</head>

<body>
<body>
    <?php 
        include 'conexao.php';
        include 'nav.php';

    ?>
    <center style="margin-top:20px;color:white">
        <h1 class="display-4" id="title">Luanna Colchões</h1>
    </center>
<div class="container-fluid">
<div class=row>
    <div class="col-sm-4 forget" >
        <form method="POST" action="sendEmail.php" >
            <div class="form-group">
                <center>
                <h4 class="anton">Digite o email cadastrado</h4>
                </center>
                <input type="email" name="email_user" class="form-control" required>
            </div>
            <button class="btn btn-block anton" type="submit" role="button" style="margin-top:15px; background-color:#0d4e2b; color:white">Enviar</button>

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