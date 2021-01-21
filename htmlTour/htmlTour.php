<?php
include_once ('Tournament1.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrap">

	<div class="banner d-flex align-items-center justify-content-center">
	<h1>Турнир трёх волшебников</h1>
	</div>

	<!-- Поделим на страницу на 3 колонки-->
	<div class="row">
		<div class="col-5">
			<!-- Поделим на колонку №1 на ещё 3 подколонки-->
			<div class="row">


				<div class="col-4 align-self-center">

					<form method="POST">
						<?php for ($matchNumber = 1; $matchNumber <= 4; $matchNumber++): ?>
							<div class="game"><!--1/8 финала игра №<?=$matchNumber?> -->
								<input name="name[<?= 2*(int)$matchNumber - 1 ?>]" class="form-control1" type="text" placeholder="Name"  value="<?= $competitors[0][2*(int)$matchNumber - 1] ?>"/>
								<input name="goals[<?= 2*(int)$matchNumber - 1 ?>]" class="form-control2" type="text" placeholder="Goals" value="<?= $competitors[1][2*(int)$matchNumber - 1] ?>"/>

								<input name="name[<?= 2*(int)$matchNumber ?>]" class="form-control1" type="text" placeholder="Name" value="<?= $competitors[0][2*(int)$matchNumber] ?>"/>
								<input name="goals[<?= 2*(int)$matchNumber ?>]" class="form-control2" type="text" placeholder="Goals" value="<?= $competitors[1][2*(int)$matchNumber] ?>"/>
							</div>
						<?php endfor;

						?>

						<input class="button" type="submit" value="Зарегистрировать матчи"/>
					</form>

				</div>


				<div class="col-4 align-self-center">
					<div class="row">
						<div class="col-7 align-self-center">

							<div class="pair">
								<div class="winner align-self-center">

									<?php
									$winner1=WhoWon(1);
									echo $winner1;

									?>
								</div>

								<div class="winner align-self-center">

									<?php
									$winner1=WhoWon(2);
									echo $winner1;

									?>
								</div>

							</div>

								<div class="winner align-self-center">

									<?php
									$winner1=WhoWon(3);
									echo $winner1;

									?>
								</div>

								<div class="winner align-self-center">

									<?php
									$winner1=WhoWon(4);
									echo $winner1;

									?>
								</div>
						</div>


						<div class="col-5 text-left">
							<div class="pair">

							<input name="goals[9]" class="form-control3" type="text" placeholder="Goals"/>

							<input name="goals[10]" class="form-control4" type="text" placeholder="Goals"/>
							</div>

							<input name="goals[11]" class="form-control3" type="text" placeholder="Goals"/>

							<input name="goals[12]" class="form-control4" type="text" placeholder="Goals"/>


						</div><!--1/4 финала игра №1-->

					</div>
				</div>

				<div class="col-4 align-self-center">

					<div class="game"><!--1/2 финала игра №1-->
					</div>

				</div><!--1/2 финала игра №1-->


			</div>
		</div>


		<!-- Финал-->
		<div class="col-2">
			<!-- Поделим на колонку №2 на ещё 2 подколонки-->
			<div class="row">
				<div class="col-6">

				</div>

				<div class="col-6">

				</div>
			</div>
		</div>
		<!-- Финал-->

		<div class="col-5">
			<!-- Поделим на колонку №3 на ещё 3 подколонки-->
			<div class="row">
				<div class="col-4 align-self-center">

					<div class="game"><!--1/2 финала игра №1-->

					</div><!--1/2 финала игра №1-->

				</div>
				<div class="col-4 align-self-center">
					<div class="game"><!--1/4 финала игра №1-->

					</div><!--1/4 финала игра №1-->

					<div class="game"><!--1/4 финала игра №2-->

					</div><!--1/4 финала игра №2-->
				</div>

				<div class="col-4"><!--Самая правая колонка-->
					<div class="game"><!--1/8 финала игра №1 -->
						<form method="POST">
							<?php for ($matchNumber = 13; $matchNumber <= 16; $matchNumber++): ?>
								<div class="game"><!--1/8 финала игра №<?=$matchNumber?> -->
									<input name="goals[<?= 2*(int)$matchNumber - 1 ?>]" class="form-control2" type="text" placeholder="Goals" value=""/>
									<input name="name[<?= 2*(int)$matchNumber - 1 ?>]" class="form-control1" type="text" placeholder="Name"  value=""/>


									<input name="goals[<?= 2*(int)$matchNumber ?>]" class="form-control2" type="text" placeholder="Goals" value=""/>
									<input name="name[<?= 2*(int)$matchNumber ?>]" class="form-control1" type="text" placeholder="Name" value=""/>

								</div>
							<?php endfor;
							LoadNamesToDB(1);
							?>

							<input class="button" type="submit" value="Зарегистрировать матчи"/>
						</form>
					</div><!--1/8 финала игра №1-->


				</div>

			</div>

		</div>


	</div><!--MAINrow-->
</div><!--div wrap-->
</body>