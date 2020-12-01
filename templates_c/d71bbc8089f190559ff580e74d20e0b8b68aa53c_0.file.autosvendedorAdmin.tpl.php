<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 21:44:02
  from 'C:\xampp\htdocs\web2\TPE\templates\autosvendedorAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc55992e71c50_72309485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd71bbc8089f190559ff580e74d20e0b8b68aa53c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\autosvendedorAdmin.tpl',
      1 => 1606326406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVendedoresAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc55992e71c50_72309485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerVendedoresAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center bg-danger text-white">AUTOS DEL VENDEDOR</h2>

<table class="table" align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año</th>
            <th>Kilometraje</th>
            <th>Potencia</th>
            <th>Peso</th>
            <th>Consumo</th>
        </tr>
        <thead>
        <tbody>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autosvendedor_s']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->modelo;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->anio;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->kilometraje;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->potencia;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->peso;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->consumo;?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
