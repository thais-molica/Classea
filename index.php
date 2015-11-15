<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<?php include 'assets.php'; ?>

		<title>Home - Classe A</title>
	</head>
	<body>
		<div class="container">

			<?php include 'header.php'; ?>

			<main class="main">

				<section class="banner-menu">
					<div class="content">
						<img src="images/banner.jpg">
					</div>
					<?php include 'menu_modalidades.php'; ?>
				</section>

				<aside>
					<a href="classea.php"><img src="images/conheca_classea.jpg" alt="Clique aqui para conhecer a Classe A"></a>
				</aside>

				<section class="articles">
					<ul>
						<li class="kids">
							<h2>Kids</h2>
							<a href="kids.php"><img src="images/kids.jpg" alt="kids">
							<span>O tema inocacao tecnologia permaneceu a Conferencia</span></a>
						</li>
						<li class="feminina">
							<h2>Feminina</h2>
							<a href="feminina.php"><img src="images/feminina.jpg" alt="feminina">
							<span>O tema inocacao tecnologia permaneceu a Conferencia</span></a>
						</li>
						<li class="grades-de-aula">
							<h2>Grades de aula</h2>
							<a href="grades-de-aula.php"><img src="images/grades-de-aula.jpg" alt="grades de aula">
							<span>O tema inocacao tecnologia permaneceu a Conferencia</span></a>
						</li>
					</ul>
				</section>

			</main>


			<?php include 'footer.php'; ?>
		</div>

	</body>
</html>
