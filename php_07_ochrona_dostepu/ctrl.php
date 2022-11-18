<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app

// getConf()->login_action = 'login'; //określenie akcji logowania - robimy to w tym miejscu, ponieważ tu są zdefiniowane wszystkie akcje

// switch ($action) {
// 	default : // 'calcView'
// 		// include 'check.php'; // KONTROLA
// 		// $ctrl = new app\controllers\CalcCtrl();
// 		// $ctrl->generateView ();
// 		control( 'app\\controllers', 'CalcCtrl', 'generateView', ['user','admin']);
// 		break;
// 	case 'calcCompute' : // akcja NIEPUBLICZNA
// 		// include 'check.php';
// 		// $ctrl = new app\controllers\CalcCtrl();
// 		// $ctrl->process ();
// 		control( null, 'CalcCtrl','process', ['user','admin']);
// 		break;
// 	case 'login': // akcja PUBLICZNA - brak check.php
// 		// $ctrl = new app\controllers\LoginCtrl();
// 		// $ctrl->doLogin();
// 		control( 'app\\controllers', 'LoginCtrl', 'doLogin', null);
// 		break;
// 	case 'logout' : // akcja NIEPUBLICZNA
// 		// include 'check.php';  // KONTROLA
// 		// $ctrl = new app\controllers\LoginCtrl();
// 		// $ctrl->doLogout();
// 		control( null, 'LoginCtrl',	'doLogout',	['user','admin']);
// 		break;
// }
getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('doLogin'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('doLogin', 'LoginCtrl', null);
getRouter()->addRoute('doLogout', 'LoginCtrl', ['user','admin']);

getRouter()->go();