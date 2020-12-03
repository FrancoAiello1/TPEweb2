<?php

require_once "./libs/Smarty/Smarty.class.php";

class TablaAdminView{

    private $title;

    function __construct(){
        $this->title = "Tandil Automotores";
    }

    function ShowLoggedHome($inv, $vend, $admin){
        $smarty = new Smarty();
        $smarty->assign('admin', $admin);
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->assign('inventario_s', $inv);
        $smarty->display('templates/inventarioAdmin.tpl');
    }

    function ShowLoggedVendedores($vend,$inv, $admin){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('admin', $admin);
        $smarty->assign('vendedores_s', $vend);
        $smarty->assign('inventario_s', $inv);
        $smarty->display('templates/vendedoresAdmin.tpl');
    }

    function ShowLoggedAutosVendedor($autosvend){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('autosvendedor_s', $autosvend);
        $smarty->display('templates/autosvendedorAdmin.tpl');
    }

    function ShowEditAuto($vend,$auto){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->assign('autos_s', $auto);
        $smarty->display('templates/editar.tpl');
    }

    function ShowEditVend($vend){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->display('templates/editarVendedor.tpl');
    }

    function ShowAdminAbm($users){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('usuarios_s', $users);
        $smarty->display('templates/adminUsuarios.tpl');
    }

    function ShowDetalles($det,$admin,$id_user,$logged){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('detalle_s', $det);
        $smarty->assign('admin', $admin);
        $smarty->assign('logged', $logged);
        $smarty->assign('id_usuario', $id_user);
        $smarty->display('templates/detalle.tpl');
    }

    function ShowHomeLoc(){
        header("Location: " . BASE_URL . "home");
    }

    function ShowLoggedHomeLoc(){
        header("Location: " . BASE_URL . "loggedhome");
    }

    function ShowLoggedVendLoc(){
        header("Location: " . BASE_URL . "loggedvendedores");
    }

    function ShowAdminAbmLoc(){
        header("Location: " . BASE_URL . "abmadmin");
    }
}