<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 18:50:25
  from 'C:\xampp\htdocs\web2\TPE\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbe9961110f41_23672453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '553ecf9bfc28a03b514656cb2562c94021f5c98a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\signup.tpl',
      1 => 1606326622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbe9961110f41_23672453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center bg-danger text-white">REGISTRÁ TU CUENTA</h2>
<div class="col-md-3 offset-md-4">
    <form action="register" method="post">
        <label for="user">Usuario</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input id="user" name="new_user" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input id="pass" name="new_pass" type="password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input id="pass" name="repeat_pass" type="password" class="form-control" placeholder="Repita contraseña">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
    </form>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
