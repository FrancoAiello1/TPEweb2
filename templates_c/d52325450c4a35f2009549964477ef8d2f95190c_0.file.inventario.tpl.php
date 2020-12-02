<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 14:52:03
  from 'C:\xampp\htdocs\web2\TPE\templates\inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc79c03d41a15_56495153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52325450c4a35f2009549964477ef8d2f95190c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\inventario.tpl',
      1 => 1606917120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc79c03d41a15_56495153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center bg-danger text-white">NUESTROS AUTOMOTORES</h2>

<table class="table" align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año</th>
            <th>Kilometraje</th>
            <th>Potencia</th>
            <th>Peso</th>
            <th>Consumo</th>
            <th>Más información</th>
            <th>Vendedor</th>
        </tr>
    </thead>
    <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventario_s']->value, 'auto');
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
                <td><button type="button" class="btn btn-link"><a href="detalles/<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
">Detalle</a></button></td>
                <td><?php echo $_smarty_tpl->tpl_vars['auto']->value->nombre;?>
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
