<?php

require_once 'RouterClass.php';
require_once 'api/ApiTablaController.php';

$r = new Router();

//Rutas usuario
$r->addRoute("inventario", "GET", "ApiTablaController", "GetInv");
$r->addRoute("inventario/:ID", "GET", "ApiTablaController", "DetalleAuto");
$r->addRoute("vendedores", "GET", "ApiTablaController", "GetVend");
$r->addRoute("vendedores/:ID", "GET", "ApiTablaController", "GetAutosVend");


//Rutas admin
$r->addRoute("delete/:ID", "POST", "ApiTablaAdminController", "DeleteAuto");


//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);