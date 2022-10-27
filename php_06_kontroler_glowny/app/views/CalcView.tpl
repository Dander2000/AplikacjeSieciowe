{extends file="./tpl/main.tpl"}

{block name=header}

	<h1>{$header}</h1>

{/block}

{block name=nav}

	<nav>
		<a href="{$conf->app_root}/ctrl.php">
			<button>
				Kalkulator kredytowy
			</button>
		</a>
	</nav>

{/block}

{block name=content}

	<form action="{$conf->action_root}calcCompute" method="post">
		<label>Kwota kredytu:
			<input min="0" type="number" name="sum" value="{$form->s|default:0}" style="width: 9em" />PLN
		</label><br />
		<label>Liczba lat kredytu:
			<input id="id_y" min="0" type="number" name="years" value="{$form->y|default:0}" style="width: 6em" />
		</label><br />
		<label>Oprocentowanie:
			<input id="id_i" min="0" type="number" name="interest" value="{$form->i|default:0}" style="width: 6em" />%
		</label><br />
		<input type="submit" value="Oblicz" style="width: 10em" />
	</form>

	{* wyświeltenie listy błędów, jeśli istnieją *}
	{if $msgs->isError()}

		<div class="result err">
			<h4>Ponownie wypełnij formularz</h4>
			<img src="https://i.kym-cdn.com/photos/images/facebook/002/122/044/045.jpg" width="220px" />
			<ul>
				{foreach $msgs->getErrors() as $err}
					{strip}
						<li>{$err}</li>
					{/strip}
				{/foreach}
			</ul>

		{/if}

		{if isset($res->result)}

			<div class="result">
				Rata kredytu: {$res->result} PLN

			{/if}

		</div>

	{/block}

	{block name=footer}

		<h5>
			{$footer}
		</h5>

{/block}