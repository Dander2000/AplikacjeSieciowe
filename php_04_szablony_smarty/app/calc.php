<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['s'] = isset($_REQUEST ['sum']) ? $_REQUEST ['sum']: null;
	$form['y'] = isset($_REQUEST ['years']) ? $_REQUEST ['years']: null;
	$form['i'] =isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;

}


//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$msgs){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['s']) && isset($form['y']) && isset($form['i']) ))	return false;	
	
	// parametry przekazane zatem
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['s'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['y'] == "") $msgs [] = 'Nie podano liczby lat kredytu';
	if ( $form['i'] == "") $msgs [] = 'Nie podano oprocentowania';

	//nie ma sensu walidować dalej gdy brak parametrów
	if (empty( $msgs )) {

		// sprawdzenie, poprawności wpisanych danych
		if (! is_numeric( $form['s'] )) $msgs [] = 'Kwota nie jest liczbą całkowitą';
		if (! is_numeric( $form['y'] )) $msgs [] = 'Liczba lat kredytu nie jest liczbą całkowitą';
		if (! is_numeric( $form['i'] )) $msgs [] = 'Oprocentowanie nie jest liczbą całkowitą';
		if ( $form['s'] <= 0) $msgs [] = 'Kwota nie może być liczbą ujemną ani zerem';
		if ( $form['y'] <= 0) $msgs [] = 'Liczba lat kredytu nie może być liczbą ujemną ani zerem';
		if ( $form['i'] <= 0) $msgs [] = 'Oprocentowanie nie może być liczbą ujemną ani zerem';
		
		if (count ( $msgs ) != 0){
			return false;

		}else{
			return true;

		} 
	}
}
	
// wykonaj obliczenia
function process(&$form,&$result){
	// global $role;
	
	//konwersja parametrów na int
	$form['s'] = intval($form['s']);
	$form['y'] = intval($form['y']);
	$form['i'] = intval($form['i']);
	
	//wykonanie operacji
	$result = ($form['s'] * (($form['i']/100)/12) * ((1+(($form['i']/100)/12))**($form['y']*12)))/((((1+($form['i']/12/100))**($form['y']*12)))-1);
	
}

//inicjacja zmiennych
$form = null;
$messages = array();
$result = null;
	
getParams($form);
if ( validate($form,$messages) ){
	process($form,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('title','Kalkulator');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('header','Kalkulator kredytowy');
$smarty->assign('footer','To jest stopka');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');