<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="<?php print(_APP_URL);?>/../css/style.css">
</head>
<body>
	<header>
		<h1>Kalkulator kredytowy</h1>
	</header>
	<nav>
		<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php"> 
			<button>
				kolejna chroniona strona
			</button>
		</a>
		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">
			<button>
				Wyloguj
			</button>
		</a>
	</nav>
	<main>
		<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
			<label>Kwota kredytu: 
			<input min="0" type="number" name="sum" value="<?php print($s??0); ?>" style="width: 9em"/>
			PLN</label><br />
			<label>Liczba lat kredytu: 
			<input id="id_y" min="0" type="number" name="years" value="<?php print($y??0); ?>"  style="width: 6em"/>
			</label><br />
			<label>Oprocentowanie: 
			<input id="id_i" min="0" type="number" name="interest" value="<?php print($i??0); ?>" style="width: 6em"/>
			%</label><br />
			<input type="submit" value="Oblicz" style="width: 10em" />
		</form>
		<?php
		//wyświeltenie listy błędów, jeśli istnieją
		if (isset($messages)) {
			if (count ( $messages ) > 0) {?>
				<div class="result err">
					<h4>Ponownie wypełnij formularz</h4>
					<img src="https://i.kym-cdn.com/photos/images/facebook/002/122/044/045.jpg" width="220px"/>
					<ul>
						<?php 
						foreach ( $messages as $key => $msg ) {
							echo '<li>'.$msg.'</li>';
						}
						?>
					</ul>
				</div>
		<?php
			}
		}
		//wyświetlanie wyniku
		if (isset($result)){ ?>
			<div class="result">
				<?php echo 'Rata kredytu: '.round($result,2).' PLN'?>
			</div>
			<?php 
		} 
		?>
	</main>
	
</body>
</html>