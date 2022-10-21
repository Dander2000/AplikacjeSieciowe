<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$s = $_REQUEST ['sum'];
$y = $_REQUEST ['years'];
$i = $_REQUEST ['interest'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($s) && isset($y) && isset($i))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
}

// 3. wykonaj zadanie jeśli wszystko w porządku
if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$s = intval($s);
	$y = intval($y);
	$i = intval($i);

	//wykonanie operacji
	$result = ($s * (($i/100)/12) * ((1+(($i/100)/12))**($y*12)))/((((1+($i/12/100))**($y*12)))-1);

}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$s,$y,$i,$messages,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';