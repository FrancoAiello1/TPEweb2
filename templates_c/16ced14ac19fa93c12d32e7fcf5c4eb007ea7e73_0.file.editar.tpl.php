<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:40:52
  from 'C:\xampp\htdocs\web2\TPE\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc84224cb4b40_08058508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ced14ac19fa93c12d32e7fcf5c4eb007ea7e73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\editar.tpl',
      1 => 1606959638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc84224cb4b40_08058508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="text-center bg-danger text-white">MODIFICAR AUTOMOTOR</h2>
<div align="center" class="flex-container">
    <form class="formulario" action="modify" method="post">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autos_s']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
            <label for="modelo">Modelo </label>
            <div>
                <input id="modelo" name="input_modelo" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->modelo;?>
" />
            </div>
            <label for="año">Año </label>
            <div>
                <input id="año" name="input_año" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->anio;?>
" />
            </div>
            <label for="kms">Kilometraje </label>
            <div>
                <input id="kms" name="input_kms" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->kilometraje;?>
" />
            </div>
            <label for="potencia">Potencia (cv)</label>
            <div>
                <input id="potencia" name="input_potencia" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->potencia;?>
" />
            </div>
            <label for="peso">Peso</label>
            <div>
                <input id="peso" name="input_peso" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->peso;?>
" />
            </div>
            <label for="consumo">Consumo</label>
            <div>
                <input id="consumo" name="input_consumo" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->consumo;?>
" />
            </div>
            <label for="detalle">Detalle</label>
            <div>
                <input id="detalle" size="100" name="input_detalle" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->detalles;?>
" />
            </div>
            <label for="vendedor">Vendedor</label>
            <div>
                <select id="vendedor" name="input_vendedor">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendedores_s']->value, 'vendedor');
$_smarty_tpl->tpl_vars['vendedor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vendedor']->value) {
$_smarty_tpl->tpl_vars['vendedor']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
"><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="oculto">
                <input id="id" name="input_idauto" value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
" />
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div>
            <button type="submit" class="btn btn-primary">Modificar automotor</button>
        </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
