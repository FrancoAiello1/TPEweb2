<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 00:58:55
  from 'C:\xampp\htdocs\web2\TPE\templates\vendedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8782af5056f4_10246144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ae99cc8c51b87d5a28d27840025d617fd1b2f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\vendedores.tpl',
      1 => 1602716331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8782af5056f4_10246144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 align="center">NUESTROS VENDEDORES</h2>

<table align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Email</th>
        </tr>
        <thead>
        <tbody>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendedores_s']->value, 'vendedor');
$_smarty_tpl->tpl_vars['vendedor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vendedor']->value) {
$_smarty_tpl->tpl_vars['vendedor']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->edad;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->ciudad;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->email;?>
</td>
        <td><button type="button" class="btn btn-outline-success"><a href="autosvendedor/<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
">Ver automoviles que vende</a></button></td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
