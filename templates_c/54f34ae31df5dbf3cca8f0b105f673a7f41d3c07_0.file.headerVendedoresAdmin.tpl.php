<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 01:59:40
  from 'C:\xampp\htdocs\web2\TPE\templates\headerVendedoresAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc8387c511720_13561567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54f34ae31df5dbf3cca8f0b105f673a7f41d3c07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\headerVendedoresAdmin.tpl',
      1 => 1606956636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc8387c511720_13561567 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="loggedhome">Tandil Automotores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="nav-boton">
                    <a class="btn btn-light" href="loggedhome">Inicio</a>
                </div>
                <div class="nav-boton">
                    <a class="btn btn-light" href="volverlogged">Volver</a>
                </div>
            </ul>
        </div>
    </nav><?php }
}
