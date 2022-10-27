<!doctype html>
<html lang="pl">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="{$page_description|default:'Opis domyślny'}">
		<title>{$title|default:"Tytuł domyślny"}</title>
		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
			integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="{$conf->app_url}/css/style.css"> -->
		<link rel="stylesheet" href="{$conf->app_url}/../css/style.css">
	</head>

	<body>
		<header>
			{block name=header} Domyślna treść nagłówek ... {/block}
		</header>
		{block name=nav}{/block}
		<main>
			{block name=content} Domyślna treść zawartości ... {/block}
		</main>
		<footer>
			{block name=footer}{/block}
		</footer>
	</body>

</html>