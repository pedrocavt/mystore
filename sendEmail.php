<?php 

    include 'conexao.php';

    $email_user = $_POST['email_user'];

    $consulta = $conexao->query("SELECT nome_user, senha_user,email_user FROM clientes WHERE email_user ='$email_user'");

    if($consulta->rowCount() == 0){

        header('location: erro2.php');
    }
    else{
        $exibe=$consulta->fetch(PDO::FETCH_ASSOC);
		
		$recebe_nome=$exibe['nome_user'];
		$recebe_senha=$exibe['senha_user'];
		
		include 'class.phpmailer.php';
		include 'class.smtp.php';
		include 'PHPMailerAutoload.php';
		
	
		
		$mail = new PHPMailer;
		
		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug = 2;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "pedrocavt@gmail.com";
		$mail->Password = "";
		$mail->setFrom('pedrocavt@gmail.com', 'Minha Loja');
		$mail->addReplyTo('pedrocavt@gmail.com', 'Minha Loja');
		$mail->addAddress($email_user, $recebe_nome);
		$mail->Subject = 'Recuperação de Senha || Minha Loja';
		$mail->msgHTML('Sua Senha na minha loja é:'.$recebe_senha);
		
		
		$mail->SMTPOptions = array(
		'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    		)
		);
		
		
		if (!$mail->send()) {
			echo "ERRO::::: " . $mail->ErrorInfo;
		} else {
			echo "Mensagem enviada!!!";
		}
    }
?>