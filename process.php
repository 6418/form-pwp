<?php
	$url= $_POST['url'] = $_SERVER['HTTP_REFERER'];
	$name = stripslashes($_POST["name"]);
	$planes = stripslashes($_POST["planes"]);
	$phone = stripslashes($_POST["phone"]);
	$email = stripslashes($_POST["email"]);
	$reunion = stripslashes($_POST["reunion"]);
	$dest = "ventas@pwp.com";
 
		require 'phpmailer/class.phpmailer.php';
		// Aqui definimos el asunto y armamos el cuerpo del mensaje
		$asunto = "Formulario PYME WEB";
		$cuerpo = "<strong>Enlace:</strong> ".$url."<br>";
		$cuerpo .= "<strong>Nombre:</strong> ".$name."<br>";
		$cuerpo .= "<strong>Plan:</strong> ".$planes."<br>";
		$cuerpo .= "<strong>Teléfono:</strong> ".$phone."<br>";
		$cuerpo .= "<strong>Email:</strong> ".$email."<br>";
		$cuerpo .= "<strong>Reunion:</strong> ".$reunion."<br>";

		$mail = new PHPMailer;
		$mail->Host = "localhost";
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = $asunto;
		$mail->addAddress($dest);
		$mail->MsgHTML($cuerpo);

		if($mail->Send()){
		    echo "mensaje enviado";
		}else{
			echo "mensaje NO enviado";
		}
?>