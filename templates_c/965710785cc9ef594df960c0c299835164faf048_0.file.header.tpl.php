<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 19:47:45
  from 'C:\xampp\htdocs\web2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc68fd1711ab9_17922053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965710785cc9ef594df960c0c299835164faf048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\header.tpl',
      1 => 1606847249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc68fd1711ab9_17922053 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="home">Tandil Automotores</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <div class="nav-boton">
                        <a class="btn btn-light" href="home">Inicio</a>
                    </div>
                    <div class="nav-boton">
                        <a class="btn btn-light" href="login">Acceso</a>
                    </div>
                    <div class="nav-boton">
                        <a class="btn btn-light" href="signup">Registrarse</a>
                    </div>
                    <div class="nav-boton">
                        <a class="btn btn-light" href="vendedores">Vendedores</a>
                    </div>
                </ul>
            </div>
        </nav>
    </div><?php }
}
