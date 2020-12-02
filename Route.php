<?php
require_once 'Controller/TablaController.php';
require_once 'Controller/UserController.php';
require_once 'Controller/TablaAdminController.php';
require_once 'RouterClass.php';

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("LOGIN", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/login');
define("LOGOUT", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/logout');
define("ADMIN", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/adminhome');

$r = new Router();

// Rutas Usuario
$r->addRoute("home", "GET", "TablaController", "Home");
$r->addRoute("autosvendedor/volver", "GET", "TablaController", "VendedoresVolver");
$r->addRoute("detalles/volver", "GET", "TablaController", "GoHome");
$r->addRoute("detalles/home", "GET", "TablaController", "GoHome");
$r->addRoute("detalle/volver", "GET", "TablaController", "GoHome");
$r->addRoute("detalle/home", "GET", "TablaController", "GoHome");
$r->addRoute("autosvendedor/home", "GET", "TablaController", "GoHome");
$r->addRoute("vendedores", "GET", "TablaController", "Vendedores");
$r->addRoute("autosvendedor/:ID", "GET", "TablaController", "AutosVendedor");
$r->addRoute("detalles/:ID", "GET", "TablaAdminController", "DetalleAuto");
$r->addRoute("detalle/:ID", "GET", "TablaAdminController", "DetalleAutoLogged");
$r->addRoute("login", "GET", "UserController", "Login");
$r->addRoute("logout", "GET", "TablaAdminController", "Logout");
$r->addRoute("verifyUser", "POST", "UserController", "VerifyUser");
$r->addRoute("signup", "GET", "UserController", "Signup");
$r->addRoute("register", "POST", "UserController", "CreateUser");


// Rutas Admin
$r->addRoute("adminhome", "GET", "TablaAdminController", "AdminHome");
$r->addRoute("adminvendedores", "GET", "TablaAdminController", "AdminVendedores");
$r->addRoute("autosvendedoradmin/volveradmin", "GET", "TablaAdminController", "VendedoresAdminVolver");
$r->addRoute("autosvendedoradmin/adminhome", "GET", "TablaAdminController", "VendedoresAdminVolverHome");
$r->addRoute("autosvendedoradmin/:ID", "GET", "TablaAdminController", "AdminAutosVendedor");
$r->addRoute("insert", "POST", "TablaAdminController", "InsertarAuto");
$r->addRoute("delete/:ID", "GET", "TablaAdminController", "DeleteAuto");
$r->addRoute("deletev/:ID", "GET", "TablaAdminController", "DeleteVendedor");
$r->addRoute("edit/modify", "POST", "TablaAdminController", "ModificaAuto");
$r->addRoute("insertVendedor", "POST", "TablaAdminController", "InsertarVendedor");
$r->addRoute("edit/:ID", "GET", "TablaAdminController", "EditarAuto");
$r->addRoute("editVend/:ID", "GET", "TablaAdminController", "EditarVend");
$r->addRoute("editVend/modify", "POST", "TablaAdminController", "ModificaVendedor");
$r->addRoute("abmadmin", "GET", "TablaAdminController", "AbmAdmin");
$r->addRoute("deleteuser/:ID", "GET", "TablaAdminController", "deleteuser");
$r->addRoute("removeadmin/:ID", "GET", "TablaAdminController", "removeadmin");
$r->addRoute("addadmin/:ID", "GET", "TablaAdminController", "addadmin");

//Ruta default
$r->setDefaultRoute("TablaController", "Home");

//Run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
