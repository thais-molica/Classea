<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<?php include 'assets.php'; ?>

		<title>Grade de Aulas - Classe A</title>
	</head>
	<body>
		<div class="container">

			<?php include 'header.php'; ?>

			<main class="main classes">

				<img src="images/grade-de-aulas.jpg">
				<ul>
					<li class="taekwon-do activate-modal" data-target="taekwon-do">
						<h2>Taekwon-do</h2>
					</li>
					<li class="jiu-jitsu activate-modal" data-target="jiu-jitsu">
						<h2>Jiu-jitsu</h2>
					</li>
					<li class="muay-thai activate-modal" data-target="muay-thai">
						<h2>Muay-thai</h2>
					</li>
					<li class="taefit activate-modal" data-target="taefit">
						<h2>Tae fit</h2>
					</li>
					<li class="yoga activate-modal" data-target="yoga">
						<h2>Yoga</h2>
					</li>
					<li class="pilates activate-modal" data-target="pilates">
						<h2>Pilates</h2>
					</li>
				</ul>
			</main>


			<?php include 'footer.php'; ?>
		</div>

		<?php include 'modal-taekwon-do.php'; ?>
		<?php include 'modal-jiu-jitsu.php'; ?>
		<?php include 'modal-muay-thai.php'; ?>
		<?php include 'modal-taefit.php'; ?>
		<?php include 'modal-pilates.php'; ?>
		<?php include 'modal-yoga.php'; ?>

	</body>
</html>
