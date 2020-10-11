<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 23:35:43
  from 'C:\xampp\htdocs\web2\TPE\templates\inventarioAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e34afce4bc6_71982094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9081b8b8c7f1ec902ec5860a704edb2e8aa679e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\inventarioAdmin.tpl',
      1 => 1602106502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7e34afce4bc6_71982094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 align="center">ADMINISTRAR NUESTROS AUTOMOTORES</h2>
<ul class="flex-container">
    <div>
        <form action="insert" method="post">
            <label for="modelo">Modelo </label>
            <div>
                <input id="modelo" name="input_modelo" />
            </div>
            <label for="año">Año </label>
            <div>
                <input id="año" name="input_año" />
            </div>
            <label for="kms">Kilometraje </label>
            <div>
                <input id="kms" name="input_kms" />
            </div>
            <label for="potencia">Potencia (cv)</label>
            <div>
                <input id="potencia" name="input_potencia" />
            </div>
            <label for="peso">Peso</label>
            <div>
                <input id="peso" name="input_peso" />
            </div>
            <label for="consumo">Consumo</label>
            <div>
                <input id="consumo" name="input_consumo" />
            </div>
            <label for="detalle">Detalles</label>
            <div>
                <input id="detalle" name="input_detalle" />
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
            <div>
                <button type="submit" class="btn btn-primary">Agregar automotor</button>
            </div>
        </form>
    </div>
    <div>
        <table align="center" border=1px, solid, black>
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
                            <td><button type="button" class="btn btn-outline-danger"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
">Borrar</a></button></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
        </table>
    </div>
    <div>
        <form action="modify" method="post">
            <label for="modelo">Modelo </label>
            <div>
                <input id="modelo" name="input_modelo" />
            </div>
            <label for="año">Año </label>
            <div>
                <input id="año" name="input_año" />
            </div>
            <label for="kms">Kilometraje </label>
            <div>
                <input id="kms" name="input_kms" />
            </div>
            <label for="potencia">Potencia (cv)</label>
            <div>
                <input id="potencia" name="input_potencia" />
            </div>
            <label for="peso">Peso</label>
            <div>
                <input id="peso" name="input_peso" />
            </div>
            <label for="consumo">Consumo</label>
            <div>
                <input id="consumo" name="input_consumo" />
            </div>
            <label for="detalle">Detalle</label>
            <div>
                <input id="detalle" name="input_detalle" />
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
            <label for="auto">Auto a modificar</label>
            <div>
                <select id="auto" name="input_idauto">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventario_s']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
"><?php echo $_smarty_tpl->tpl_vars['auto']->value->modelo;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Modificar automotor</button>
            </div>
        </form>
    </div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
