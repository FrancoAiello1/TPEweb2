<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 18:49:29
  from 'C:\xampp\htdocs\web2\TPE\templates\autosvendedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbe99290ea550_93144663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a60be3e89ca3af1d4c5b7ed3fb080f26619b0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\autosvendedor.tpl',
      1 => 1606326411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headervendedor.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbe99290ea550_93144663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headervendedor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
