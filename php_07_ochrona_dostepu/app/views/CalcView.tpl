{extends file="./tpl/main.tpl"}

{block name=header}

	<h1>{$header}</h1>

{/block}

{block name=nav}

	<nav>
		<a href="{$conf->app_root}">
			<button>
				Kalkulator kredytowy
			</button>
		</a>
		<a href="{$conf->action_url}logout">
			<button>
				Wyloguj
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
	{include file='messages.tpl'}

{/block}

{block name=footer}

	<h5>
		użytkownik: {$user->login}, rola: {$user->role}
	</h5>

{/block}