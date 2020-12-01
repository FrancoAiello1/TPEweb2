<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 23:38:36
  from 'C:\xampp\htdocs\web2\TPE\templates\headerAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6c5ec5faf96_38669333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50fba775882a4850ab5f75a213084a34f80346d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\headerAdmin.tpl',
      1 => 1606862313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc6c5ec5faf96_38669333 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="adminhome">Tandil Automotores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="nav-boton">
                    <a class="btn btn-light" href="adminhome">Inicio</a>
                </div>
                <div class="nav-boton">
                    <a class="btn btn-light" href="logout">Desloguearse</a>
                </div>
                <div class="nav-boton">
                    <a class="btn btn-light" href="adminvendedores">Vendedores</a>
                </div>
            </ul>
        </div>
    </nav><?php }
}
