<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 08:58:29
  from 'C:\xampp\htdocs\web2\TPE\templates\headerAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f76cf95e8d866_69675527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50fba775882a4850ab5f75a213084a34f80346d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\headerAdmin.tpl',
      1 => 1601621908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f76cf95e8d866_69675527 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</title>
    <style>
        .flex-container {
            display: flex;
    
        }

        .flex-container>div {
            
            margin: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="adminhome">Tandil Automotores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="adminhome">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout">Desloguearse</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="adminvendedores">Vendedores</a>
                </li>
            </ul>
        </div>
    </nav><?php }
}
