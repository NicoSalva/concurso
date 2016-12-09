{foreach from=$personas key=index item=persona}
<p>{$persona['id_persona']}</p>
<p>{$persona['nombre']}</p>
<p>{$persona['email']}</p>
<p>{$persona['area']}</p>
<br><br>
{/foreach}
