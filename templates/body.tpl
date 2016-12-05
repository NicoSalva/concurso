<body>
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2" id="derecho">
      <div class="row">
        <header class="col-xs-12 col-md-12">
          <h1>Sistema Concurso Docente Facultad De Ciencias Veterinarias</h1>
        </header>
        <nav class="col-xs-12 col-md-12 navegadora">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href=# id="home">Home</a></li>
            <li role="presentation"><a href=# id="servicios">Paquete de Servicios</a></li>
            <li role="presentation"><a href=# id="presupuesto">Presupuesto</a></li>
            <li role="presentation"><a href=# id="contacto">Contacto</a></li>
            <li role="presentation"><a href=# id="somos">Quienes Somos</a></li>
            {if $usuario['fk_rol']==0}
            <li role="presentation"><a href=# id="login">Ingresar</a></li>
            {else}
            <li role="presentation"><a href=# id="logout">Logout</a><span class="glyphicon glyphicon-user">{$usuario['email']}</span></li>
            {/if}
            {if $usuario['fk_rol']==1}
            <li role="presentation"><a href=# id="admin">Administración</a></li>
            {/if}
          </ul>
        </nav>
        <div class="col-xs-12 col-md-12" id="cargadorAjax">
        </div>
      </div>
