<?php
/* Smarty version 3.1.30, created on 2016-12-06 19:03:51
  from "C:\xampp\htdocs\proyectos\concurso\concurso\templates\body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5846fd874d89b7_28663576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '509c63752b417874cda3a186930a62d4f2bb5831' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\concurso\\concurso\\templates\\body.tpl',
      1 => 1481047427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5846fd874d89b7_28663576 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

            <li role="presentation"><a href=# id="login">Ingresar</a></li>

            <li role="presentation"><a href=# id="logout">Logout</a><span class="glyphicon glyphicon-user"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</span></li>


            <li role="presentation"><a href=# id="admin">Administración</a></li>
            
          </ul>
        </nav>
        <div class="col-xs-12 col-md-12" id="cargadorAjax">
        </div>
      </div>
<?php }
}
