<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Luanna Colchoões - Login</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<style>
	body{
        background-color:#b70d23;
    }
.erro{
    margin: 25px auto;
    box-shadow: -2px 7px 22px -5px rgba(0,0,0,0.75);
    padding: 10px;
	border-radius: 10px;
	background: white;
	}
	.anton {
    font-family: 'Anton', sans-serif;
}

</style>
	
	
</head>

<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav.php';	
	?>
	 <center style="margin-top:20px;color:white">
        <h1 class="display-4" id="title">Pedro Colchões</h1>
    </center>
	
	<div class="container-fluid" >
	
		<div class="row">
		
			<div class="erro text-center">
				
				<h2 class="anton">Email já em uso!</h2>
				
				<a href="formUser.php" class="btn btn-block btn-danger" role="button" style="margin-top:30px;">Tentar Novamente</a>
                
                <div style="margin-top:15px">
                    <a href="forgetPassword.php" >Esqueci minha senha</a>							
                </div>

			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>