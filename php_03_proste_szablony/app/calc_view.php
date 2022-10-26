<?php //góra strony z szablonu 
include _ROOT_PATH.'/tpl/top.php';
include _ROOT_PATH.'/tpl/nav.php';
?>
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
<?php //dół strony z szablonu 
include _ROOT_PATH.'/tpl/bottom.php';
?>
</body>
</html>