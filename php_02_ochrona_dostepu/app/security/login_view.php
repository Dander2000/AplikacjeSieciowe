<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="<?php print(_APP_URL);?>/../css/style.css">
</head>
<body>
	<header>
		<h1>Kalkulator kredytowy</h1>
	</header>
	<main>
		<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
		 <!-- class="pure-form pure-form-stacked"> -->
			<!-- <legend>Logowanie</legend> -->
			<label>Login: 
			<input type="text" name="login" value="<?php echo $form['login']??null ?>" />
			</label><br />
			<label>Password:
			<input type="password" name="pass" />
			</label><br />
			<input type="submit" value="zaloguj" />
			<!-- class="pure-button pure-button-primary"/> -->
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
					}?>
				</ul>
			</div>
		<?php
			}
		}
		?>
	</main>
</body>
</html>