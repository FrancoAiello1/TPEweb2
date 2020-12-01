<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 19:52:33
  from 'C:\xampp\htdocs\web2\TPE\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc690f12b5e54_44555686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3047e007d380a85e42ef529dbb101b94cf263ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\detalle.tpl',
      1 => 1606848748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headervendedor.tpl' => 1,
    'file:vue/comments.vue' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc690f12b5e54_44555686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headervendedor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center bg-danger text-white"> DETALLE DEL AUTOMOTOR</h2>
<table class="table" align="center" border=1px, solid, black>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle_s']->value, 'auto');
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
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<br>
<h1 class="text-center bg-dark text-white">Descripcion</h1>
<h4 align="center"><?php echo $_smarty_tpl->tpl_vars['auto']->value->detalles;?>
</h4>
<h1 class="text-center bg-success text-white">Comentarios</h1>

<div style="width: 30rem;">
    <?php $_smarty_tpl->_subTemplateRender('file:vue/comments.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<form method="POST" id="form-comentario">
    <input id="id_auto" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
>
    <input id="usuario"  value=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
>
    <input id="admin"  value=<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
> 

    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
        <span class="badge badge-dark"><?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
</span> <input id="comentario" type="text" size="30" maxlength="30" placeholder="Deje su comentario">
        <label>Puntaje</label>
        <select id="puntuacion">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    
        <input class="btn btn-link" type="submit" value="Comentar">
    
    <?php } else { ?>
        <p>Para comentar, debe resgistrarse aqui -
            <a name="registro" href="registro">Registrarme</a></p>
    <?php }?>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
