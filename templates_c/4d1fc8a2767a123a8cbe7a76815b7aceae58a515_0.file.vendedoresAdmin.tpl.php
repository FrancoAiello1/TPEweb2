<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 00:58:12
  from 'C:\xampp\htdocs\web2\TPE\templates\vendedoresAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f878284682dc4_89530858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1fc8a2767a123a8cbe7a76815b7aceae58a515' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\vendedoresAdmin.tpl',
      1 => 1602716288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f878284682dc4_89530858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 align="center">ADMINISTRAR NUESTROS VENDEDORES</h2>

<ul class="flex-container">
    <div>
        <form action="insertVendedor" method="post">
            <label for="nombre">Nombre </label>
            <div>
                <input id="nombre" name="input_nombre" />
            </div>
            <label for="edad">Edad </label>
            <div>
                <input id="edad" name="input_edad" />
            </div>
            <label for="ciudad">Ciudad</label>
            <div>
                <input id="ciudad" name="input_ciudad" />
            </div>
            <label for="email">Email (cv)</label>
            <div>
                <input id="email" name="input_email" />
            </div>
            <label for="vendedor">Vendedor</label>
            <div>
                <button type="submit" class="btn btn-primary">Agregar Vendedor</button>
            </div>
        </form>
    </div>
    <div>
        <table class="table" align="center" border=1px, solid, black>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Ciudad</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
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
                            <td><button type="button" class="btn btn-outline-danger"><a href="deletev/<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
">Borrar</a></button></td>
                            <td><button type="button" class="btn btn-outline-success"><a href="autosvendedoradmin/<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
">Ver autos que vende</a></button></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
        </table>
    </div>
    <div>
        <form action="modifyVendedor" method="post">
            <label for="nombre">Nombre </label>
            <div>
                <input id="nombre" name="input_nombre" />
            </div>
            <label for="edad">Edad </label>
            <div>
                <input id="edad" name="input_edad" />
            </div>
            <label for="ciudad">Ciudad</label>
            <div>
                <input id="ciudad" name="input_ciudad" />
            </div>
            <label for="email">Email (cv)</label>
            <div>
                <input id="email" name="input_email" />
            </div>
            <label for="vendedor">Vendedor a modificar</label>
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
                <button type="submit" class="btn btn-primary">Modificar Vendedor</button>
            </div>
        </form>
    </div>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
