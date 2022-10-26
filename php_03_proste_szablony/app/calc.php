<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
// include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$s,&$y,&$i){
	$s = isset($_REQUEST ['sum']) ? $_REQUEST ['sum']: null;
	$y = isset($_REQUEST ['years']) ? $_REQUEST ['years']: null;
	$i = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;

}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$s,&$y,&$i,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($s) && isset($y) && isset($i))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $s == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano liczby lat kredytu';
	}
	if ( $i == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (empty( $messages )) {

		// sprawdzenie, poprawności wpisanych danych
		if (! is_numeric( $s )) {
			$messages [] = 'Kwota nie jest liczbą całkowitą';
		}
		if ($s <= 0) {
			$messages [] = 'Kwota nie może być liczbą ujemną ani zerem';
		}
		if (! is_numeric( $y )) {
			$messages [] = 'Liczba lat kredytu nie jest liczbą całkowitą';
		}
		if ($y <= 0) {
			$messages [] = 'Liczba lat kredytu nie może być liczbą ujemną ani zerem';
		}
		if (! is_numeric( $i )) {
			$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
		}
		if ($i <= 0) {
			$messages [] = 'Oprocentowanie nie może być liczbą ujemną ani zerem';
		}
		if (count ( $messages ) != 0){
			return false;
		
		}else{
			return true;

		} 
	}
}

function process(&$s,&$y,&$i,&$messages,&$result){
	// global $role;
	
	//konwersja parametrów na int
	$s = intval($s);
	$y = intval($y);
	$i = intval($i);
	
	//wykonanie operacji
	$result = ($s * (($i/100)/12) * ((1+(($i/100)/12))**($y*12)))/((((1+($i/12/100))**($y*12)))-1);
	
}

//definicja zmiennych kontrolera
$x = null;
$y = null;
$operation = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams( $s,$y,$i );
if ( validate( $s,$y,$i,$messages ) ) { // gdy brak błędów
	process( $s,$y,$i,$messages,$result );
}

$title = "Kalkulator";
$description = "Aplikacja kalkulatora kredytowego";
$header = "Kalkulator kredytowy";
$footer = "To jest stopka";
// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';