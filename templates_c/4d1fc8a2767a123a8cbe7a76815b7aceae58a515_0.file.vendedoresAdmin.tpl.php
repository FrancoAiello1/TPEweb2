<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 01:59:38
  from 'C:\xampp\htdocs\web2\TPE\templates\vendedoresAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc8387a0cc060_42255504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1fc8a2767a123a8cbe7a76815b7aceae58a515' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\vendedoresAdmin.tpl',
      1 => 1606957175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc8387a0cc060_42255504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (($_smarty_tpl->tpl_vars['admin']->value[0]->admin == true)) {?>
    <div class="nav-boton">
        <a class="btn btn-dark" href="abmadmin">Administrar usuarios</a>
    </div>
<?php }?>
<h2 class="text-center bg-danger text-white"><?php if (($_smarty_tpl->tpl_vars['admin']->value[0]->admin == true)) {?><span>ADMINISTRAR</span><?php }?>NUESTROS VENDEDORES</h2>
<?php if (($_smarty_tpl->tpl_vars['admin']->value[0]->admin == true)) {?>
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
                <label for="email">Email</label>
                <div>
                    <input id="email" name="input_email" />
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Agregar Vendedor</button>
                </div>
            </form>
        </div>
    <?php }?>
    <div>
        <table class="table" align="center">
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
                            <?php if (($_smarty_tpl->tpl_vars['admin']->value[0]->admin == true)) {?>
                                <td><button type="button" class="btn btn-outline-danger"><a href="deletev/<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
">Borrar</a></button></td>
                                <td><button type="button" class="btn btn-outline-warning"><a href="editVend/<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
">Editar</a></button></td>
                            <?php }?>
                            <td><button type="button" class="btn btn-outline-success"><a href="autosvendedorlogged/<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->id_vendedor;?>
">Ver autos que vende</a></button></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
        </table>
    </div>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
