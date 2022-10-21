<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kalkulator</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<header>
			<h1>Kalkulator kredytowy</h1>
		</header>
		<main>
			<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
				<label for="id_s">Kwota: </label>
				<input id="id_s" type="number" name="sum" value="<?php print($s??0); ?>" /><br />
				<label for="id_y">Liczba lat kredytu: </label>
				<input id="id_y" type="number" name="years" value="<?php print($y??0); ?>" /><br />
				<label for="id_i">Oprocentowanie: </label>
				<input id="id_i" type="number" name="interest" value="<?php print($i??0); ?>" /><br />
				<input type="submit" value="Oblicz" />
			</form>
			<?php
			//wyświeltenie listy błędów, jeśli istnieją
			if (isset($messages)) {
				if (count ( $messages ) > 0) {?>
					<div class="err">
						<h4>Ponownie wypełnij formularz</h4>
						<?php 
					foreach ( $messages as $key => $msg ) {
						echo '<h5>'.$msg.'</h5>';
					}
					?>
					</div>
			<?php
				}
			}
			//wyświetlanie wyniku
			if (isset($result)){ ?>
				<div class="result">
					<?php echo 'Rata kredytu: '.$result; ?>
				</div>
				<?php 
			} 
			?>
		</main>
	</body>
</html>