<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 22:13:06
  from 'C:\xampp\htdocs\web2\TPE\templates\adminUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc56062d2a412_60647578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d34674869204c478115326c0d4313e1a2b6c620' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\adminUsuarios.tpl',
      1 => 1606770784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc56062d2a412_60647578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center bg-danger text-white">ADMINISTRAR USUARIOS</h2>

<table class="table" align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Es admin</th>
            <thead>
            <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios_s']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->username;?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value->admin == 1) {?>
                                Si
                            <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value->admin == 0) {?>
                                No
                            <?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value->admin == 1) {?>
                                <button type="button" class="btn btn-outline-warning"><a href="removeadmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">Sacar admin</a></button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value->admin == 0) {?>
                                <button type="button" class="btn btn-outline-success"><a href="addadmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">Hacer admin</a></button>
                            <?php }?></td>
                            <td><button type="button" class="btn btn-outline-danger"><a href="deleteuser/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">Borrar usuario</a></button></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
