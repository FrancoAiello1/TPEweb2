<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 03:48:21
  from 'C:\xampp\htdocs\web2\TPE\templates\editarVendedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbdc5f5cc02e3_05667037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36835d49cfc810f4cdff90241c515e5ce5a610b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\editarVendedor.tpl',
      1 => 1606271940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbdc5f5cc02e3_05667037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul align="center" class="flex-container">
    <form action="modify" method="post">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vendedores_s']->value, 'vend');
$_smarty_tpl->tpl_vars['vend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vend']->value) {
$_smarty_tpl->tpl_vars['vend']->do_else = false;
?>
            <label for="nombre">Nombre </label>
            <div>
                <input id="nombre" name="input_nombre" value="<?php echo $_smarty_tpl->tpl_vars['vend']->value->nombre;?>
" />
            </div>
            <label for="edad">Edad </label>
            <div>
                <input id="edad" name="input_edad" value="<?php echo $_smarty_tpl->tpl_vars['vend']->value->edad;?>
" />
            </div>
            <label for="ciudad">Ciudad </label>
            <div>
                <input id="ciudad" name="input_ciudad" value="<?php echo $_smarty_tpl->tpl_vars['vend']->value->ciudad;?>
" />
            </div>
            <label for="email">Email</label>
            <div>
                <input id="email" name="input_email" value="<?php echo $_smarty_tpl->tpl_vars['vend']->value->email;?>
" />
            </div>
            <input class="oculto" id="id" name="input_idvendedor" value="<?php echo $_smarty_tpl->tpl_vars['vend']->value->id_vendedor;?>
" />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div>
            <button type="submit" class="btn btn-primary">Modificar vendedor</button>
        </div>
    </form>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
