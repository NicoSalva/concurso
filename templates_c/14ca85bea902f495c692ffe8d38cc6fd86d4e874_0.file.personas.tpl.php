<?php
/* Smarty version 3.1.30, created on 2016-12-09 23:52:01
  from "C:\xampp\htdocs\proyectos\concurso\concurso\templates\personas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584b35912414b1_87231175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14ca85bea902f495c692ffe8d38cc6fd86d4e874' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\concurso\\concurso\\templates\\personas.tpl',
      1 => 1481323917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584b35912414b1_87231175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contenedorPersonas col-md-6">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'persona', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['persona']->value) {
?>
<div class="list-group col-md-6">
  <a id="nombrePersona"href="#" class="list-group-item active">
    <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

  </a>
  <a href="#" class="list-group-item detallesPersona"><p><?php echo $_smarty_tpl->tpl_vars['persona']->value['email'];?>
</p></a>
  <a href="#" class="list-group-item detallesPersona"><p><?php echo $_smarty_tpl->tpl_vars['persona']->value['area'];?>
</p></a>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
