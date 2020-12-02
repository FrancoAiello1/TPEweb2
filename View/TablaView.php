<?php

require_once "./libs/Smarty/Smarty.class.php";

class TablaView{

    private $title;

    function __construct(){
        $this->title = "Tandil Automotores";
    }

    function ShowHome($inv,$vend){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->assign('inventario_s', $inv);
        $smarty->display('templates/inventario.tpl');
    }

    function ShowVendedores($vend){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('vendedores_s', $vend);
        $smarty->display('templates/vendedores.tpl');
    }

    function ShowAutosVendedor($autosvend){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('autosvendedor_s', $autosvend);
        $smarty->display('templates/autosvendedor.tpl');
    }
    function ShowHomeLoc(){
        header("Location: " . BASE_URL . "home");
    }

    function ShowDetalle($det,$admin,$logged){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('detalle_s', $det);
        $smarty->assign('admin', $admin);
        $smarty->assign('logged', $logged);
        $smarty->assign('id_usuario', 0);
        $smarty->display('templates/detalle.tpl');
    }
}