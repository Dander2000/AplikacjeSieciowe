{extends file="main.tpl"}

{block name=header}

    <h1>{$header}</h1>

{/block}

{block name=content}

    <form action="{$conf->action_url}login" method="post">
        <label for="id_login">Login:
            <input id="id_login" type="text" name="login" value="{$form->login}" />
        </label></br>
        <label for="id_pass">Password:
            <input id="id_pass" type="password" name="pass" /><br />
        </label></br>
        <input type="submit" value="zaloguj" />
    </form>

    {include file='messages.tpl'}

{/block}