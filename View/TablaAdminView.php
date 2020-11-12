<?php

require_once "./libs/Smarty/Smarty.class.php";

class TablaAdminView{

    private $title;

    function __construct(){
        $this->title = "Tandil Automotores admin";
    }

    function ShowAdminHome($inv, $vend){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->assign('inventario_s', $inv);
        $smarty->display('templates/inventarioAdmin.tpl');
    }

    function ShowAdminVendedores($vend,$inv){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->assign('inventario_s', $inv);
        $smarty->display('templates/vendedoresAdmin.tpl');
    }

    function ShowAdminAutosVendedor($autosvend){
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

    function ShowHomeLoc(){
        header("Location: " . BASE_URL . "home");
    }

    function ShowAdminHomeLoc(){
        header("Location: " . BASE_URL . "adminhome");
    }

    function ShowAdminVendLoc(){
        header("Location: " . BASE_URL . "adminvendedores");
    }
}