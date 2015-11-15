<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$msg = "<p><h3>Olá você recebeu do seu site:</h3></p>
	<br />
<p><strong>Nome: </strong>".$nome."</p>

<p><strong>Mensagem: </strong></p><p>".$message."</p>
	";


$para_email = 'thamoli@gmail.com'; // e-mail de envio
	$headers = "MIME-Version: 1.1\r\n";

	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	$headers .= "Cc:thamoli@gmail.com\r\n"; //Com cópia

	$headers .= "From:thamoli@gmail.com\r\n"; // remetente

	$headers .= "Return-Path:thamoli@gmail.com\r\n"; // return-path

	$envio = @mail($para_email, "Contato do seu Site", $msg, $headers);

	if($envio)

	 echo 500;

	else

	 echo 400;

?>
