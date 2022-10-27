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
    </div>
{/if}

{if $msgs->isInfo()}
    <div class="result">
        <ul>
            {foreach $msgs->getInfos() as $inf}
                {strip}
                    <li>{$inf}</li>
                {/strip}
            {/foreach}
        </ul>
    </div>
{/if}

{if isset($res->result)}

    <div class="result">
        Rata kredytu: {$res->result} PLN
    </div>

{/if}