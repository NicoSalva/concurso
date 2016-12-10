<div class="contenedorPersonas col-md-6">
{foreach from=$personas key=index item=persona}
<div class="list-group col-md-6">
  <a id="nombrePersona"href="#" class="list-group-item active">
    {$persona['nombre']}
  </a>
  <a href="#" class="list-group-item detallesPersona"><p>{$persona['email']}</p></a>
  <a href="#" class="list-group-item detallesPersona"><p>{$persona['area']}</p></a>
</div>
{/foreach}
</div>
