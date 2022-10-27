<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->s = isset($_REQUEST ['sum']) ? $_REQUEST ['sum'] : null;
		$this->form->y = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
		$this->form->i = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if ($this->form->s == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano liczby lat kredytu');
		}
		if ($this->form->i == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->s )) {
				$this->msgs->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Liczba lat kredytu nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->i )) {
				$this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
			}

			if ( $this->form->s <= 0 ){
				$this->msgs->addError('Kwota nie może być liczbą ujemną ani zerem');
			} 
			
			if ( $this->form->y <= 0 ){
				$this->msgs->addError('Liczba lat kredytu nie może być liczbą ujemną ani zerem');
			} 

			if ( $this->form->i <= 0 ){
				$this->msgs->addError('Oprocentowanie nie może być liczbą ujemną ani zerem');
			} 
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->s = intval($this->form->s);
			$this->form->y = intval($this->form->y);
			$this->form->i = intval($this->form->i);
				
			//wykonanie operacji
			$this->result->result =  round(($this->form->s * (($this->form->i/100)/12) * ((1+(($this->form->i/100)/12))**($this->form->y *12)))/((((1+($this->form->i/12/100))**($this->form->y *12)))-1),2);

		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('title','Kalkulator');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('header','Kalkulator kredytowy');
		$smarty->assign('footer','To jest stopka');
	
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
	}
}
