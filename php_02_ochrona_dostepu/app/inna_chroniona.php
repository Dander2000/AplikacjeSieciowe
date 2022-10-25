<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Chroniona strona</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="<?php print(_APP_URL);?>/../css/style.css">
	</head>
	<body>
		<header>
			<h1>Chroniona strona</h1>
		</header>
		<nav>
			<a href="<?php print(_APP_ROOT); ?>/app/calc.php">
			<!-- class="pure-button"> -->
				<button>
					Powrót do kalkulatora
				</button>
			</a>
			<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">
				<!-- class="pure-button pure-button-active"> -->
				<button>
					Wyloguj
				</button>
			</a>
		</nav>
		<main>
			<p>To jest inna chroniona strona aplikacji internetowej</p>
		</main>	
	</body>
</html>