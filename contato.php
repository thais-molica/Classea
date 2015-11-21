<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<?php include 'assets.php'; ?>

		<title>Contato - Classe A</title>
	</head>
	<body>
		<div class="container">

			<?php include 'header.php'; ?>

			<main class="main contact">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3655.771234208759!2d-46.670716!3d-23.612536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50a750b1d077%3A0x98625eb0eec9eb7a!2sAv.+Ibirapuera%2C+3992+-+Indian%C3%B3polis%2C+S%C3%A3o+Paulo+-+SP%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1446946780020"
				width="100%" height="620" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="form-box">
					<h2>Informacoes de contato</h2>
					<address>
					<span><em>Telefone</em> 11 - 9999 9999</span>
					<span><em>E-mail</em> contato@classeatkd.com.br</span>
					<span><em>Endereço</em> Rua do endereço</span>
					</address>
					<h2>Fique conectado</h2>
					<?php include 'social.php'; ?>
					<form id="contact-form" >
						<fieldset>
							<legend>Formulario de contato</legend>
							<label><span>Nome:</span> <input type="text" name="name" id="name"></label>
							<label><span>Assunto:</span> <input type="text" name="subject" id="subject"></label>
							<label><span>Mensagem:</span> <textarea name="message"></textarea></label>
							<button type="button" id="send-btn">Enviar</button>
						</fieldset>
					</form>
				</div>
			</main>


			<?php include 'footer.php'; ?>
		</div>
		<div id="shadow">
			<p class="text_line01"><img src="images/carregando.gif" alt="Carregando" title="Carregando"></p>
			<p class="text_line02">Enviando</p>
		</div>

		<div id="send">Mensagem enviada com sucesso!</div>
		<div id="notsend">Falha no envio da mensagem!</div>

		<div id="alert_box"></div>
	</body>
</html>
