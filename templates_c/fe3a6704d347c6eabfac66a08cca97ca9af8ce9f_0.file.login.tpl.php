<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 18:50:23
  from 'C:\xampp\htdocs\web2\TPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbe995fe4ec89_48284013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe3a6704d347c6eabfac66a08cca97ca9af8ce9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\login.tpl',
      1 => 1606326611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbe995fe4ec89_48284013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center bg-danger text-white">ACCEDÉ A TU CUENTA</h2>
<div class="col-md-3 offset-md-4">
    <form action="verifyUser" method="post">
        <label for="user">Usuario</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input id="user" name="input_user" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input id="pass" name="input_pass" type="password" class="form-control" placeholder="Password">
        </div>
        <button action="ingresar" type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
