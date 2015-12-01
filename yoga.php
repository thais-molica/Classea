<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<?php include 'assets.php'; ?>

		<title>Yoga - Classe A</title>
	</head>
	<body>
		<div class="container">

			<?php include 'header.php'; ?>

			<main class="main modalities yoga">

				<section class="banner-menu">
					<div class="content">
						<img src="images/jiu-jitsu.jpg">
						<div class="info">
						<h1>Yoga</h1>
						<button class="activate-modal" data-target="yoga">Grade de aulas</button>
						<div class="box">
							<div class="column">
								<h2>LOREM IPSUM DOLOR IS EFECT</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									In molestie elit in justo luctus, non maximus metus consectetur.
									Phasellus id efficitur mauris. Sed ac orci in leo iaculis viverra vitae a justo.
									Sed commodo lectus fermentum tellus commodo varius.
									Vivamus vel fermentum nulla, id consequat lorem.
									Sed elementum, nibh ut efficitur ultricies, ipsum dolor dapibus eros, at sodales arcu nisl et justo.
									Vivamus venenatis sem eu metus elementum, in vestibulum libero rhoncus elementum, nibh ut efficitur ultricies, ipsum dolor dapibus eros, at sodales  justo.
									Vivamus venenatis sem eu metus elementum.</p>
							</div>
							<div class="column">
								<h2>CALORIAS GASTA COM Yoga</h2>
								<div class="calories-spent">
									<span class="time"><em>60</em> minutos</span>
									<span class="calories"><em>720</em> Kall/h</span>
								</div>
								<div class="benefits">
									<h2>BENEFÍCIOS</h2>
									<p>MELHORA O CONDICIONAMENTO FÍSICO GERAL, DESENVOLVE A CONCENTRAÇÃO, CONTROLE EMOCIONAL E ESPÍRITO COMPETITIVO SAUDÁVEL</p>
								</div>
							</div>
						</div>
						</div>
					</div>
					<?php include 'menu_modalidades.php'; ?>
				</section>

				<section class="gallery photo">
					<h2>Galeria de <strong>Imagens</strong></h2>
					<ul id="owl-demo" class="content">

						<li class="item"><img src="images/galeria/jiu-jitsu1.png" alt="Jiu-Jitsu 1"></li>
					  <li class="item"><img src="images/galeria/jiu-jitsu2.png" alt="Jiu-Jitsu 2"></li>
					  <li class="item"><img src="images/galeria/jiu-jitsu3.png" alt="Jiu-Jitsu 3"></li>
						<li class="item"><img src="images/galeria/jiu-jitsu1.png" alt="Jiu-Jitsu 1"></li>
						<li class="item"><img src="images/galeria/jiu-jitsu2.png" alt="Jiu-Jitsu 2"></li>
						<li class="item"><img src="images/galeria/jiu-jitsu3.png" alt="Jiu-Jitsu 3"></li>
						<li class="item"><img src="images/galeria/jiu-jitsu1.png" alt="Jiu-Jitsu 1"></li>
					  <li class="item"><img src="images/galeria/jiu-jitsu2.png" alt="Jiu-Jitsu 2"></li>
					  <li class="item"><img src="images/galeria/jiu-jitsu3.png" alt="Jiu-Jitsu 3"></li>

					</ul>
				</section>

				<section class="gallery video">
					<h2>Galeria de <strong>Videos</strong></h2>
					<ul class="content">
						<li>
						<iframe width="520" height="312" src="https://www.youtube.com/embed/j3-F6DcGUsk" frameborder="0" allowfullscreen></iframe>
						</li>
						<li>
						<iframe width="222" height="145" src="https://www.youtube.com/embed/j3-F6DcGUsk" frameborder="0" allowfullscreen></iframe>
						</li>
						<li>
						<iframe width="222" height="145" src="https://www.youtube.com/embed/j3-F6DcGUsk" frameborder="0" allowfullscreen></iframe>
						</li>
						<li>
						<iframe width="222" height="145" src="https://www.youtube.com/embed/j3-F6DcGUsk" frameborder="0" allowfullscreen></iframe>
						</li>
						<li>
						<iframe width="222" height="145" src="https://www.youtube.com/embed/j3-F6DcGUsk" frameborder="0" allowfullscreen></iframe>
						</li>
					</ul>
				</section>

				<section class="our-team">
					<h2>Nossa equipe de Jiu-jitsu</h2>
					<ul>
						<li>
							<img src="images/professor-classea.jpg" alt="Professor Classe A">
							<div class="content">
								<h2>Professor <strong>Classe A TKD</strong></h2>
								<p>Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. </p>
							</div>
						</li>
						<li>
							<img src="images/professor-classea.jpg" alt="Professor Classe A">
							<div class="content">
								<h2>Professor <strong>Classe A TKD</strong></h2>
								<p>Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. </p>
							</div>
						</li>
						<li>
							<img src="images/professor-classea.jpg" alt="Professor Classe A">
							<div class="content">
								<h2>Professor <strong>Classe A TKD</strong></h2>
								<p>Lorem ipsum dolor sit amet,
									consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. </p>
							</div>
						</li>
					</ul>
				</section>


			</main>


			<?php include 'footer.php'; ?>
		</div>

		<?php include 'modal-yoga.php'; ?>
	</body>
</html>
