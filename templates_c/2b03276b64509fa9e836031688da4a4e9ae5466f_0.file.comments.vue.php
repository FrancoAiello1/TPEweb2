<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 16:43:38
  from 'C:\xampp\htdocs\web2\TPE\templates\vue\comments.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7b62a783bc1_67272507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b03276b64509fa9e836031688da4a4e9ae5466f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\vue\\comments.vue',
      1 => 1606923498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7b62a783bc1_67272507 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="app-comments">

  <div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <span>
          Puntuacion promedio: {{promedio}}
        </span>
    </div>
    
   <div class="card" class="col-md-12">
      <ul id= "list-comments" class="list-group list-group-flush">
        <li v-for= "comments in comentarios" class="list-group-item">
       <span class="badge badge-dark">{{comments.username}}</span> - "{{comments.comentario}}" - Puntaje: {{comments.puntaje}}
        <button class="btn btn-link" v-if="admin == 1" v-on:click="delete(comments.id)">Borrar</button>
        </li>
        </ul>
    </div> 

  </div> 
</section>
<?php }
}
