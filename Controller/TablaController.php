<?php

require_once "./View/TablaView.php";
require_once "./Model/TablaModel.php";

class TablaController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new TablaView();
        $this->model = new TablaModel();

    }

    function CheckLoggedIn(){
        session_start();
        if (isset($_SESSION['USER'])) {
            header("Location: " . ADMIN);
            die();
        }
    }

    function getUserName()
    {
        if (isset($_SESSION['USER']))
            return $_SESSION['USER'];
    }

    function Home(){
        $this->CheckLoggedIn();
        $inv = $this->model->GetInventario();
        $vend = $this->model->GetVendedores();
        $this->view->ShowHome($inv,$vend);
    }

    function GoHome(){
        header("Location: " . BASE_URL . "home");
    }

    function VendedoresVolver(){
        header("Location: " . BASE_URL . "vendedores");
    }

    function Vendedores(){
        $this->CheckLoggedIn();
        $vend = $this->model->GetVendedores();
        $this->view->ShowVendedores($vend);

    }

    function AutosVendedor($params = null){
        $id_vendedor = $params[':ID'];
        $autosvend =$this->model->GetAutosVendedor($id_vendedor);
        $this->view->ShowAutosVendedor($autosvend);
    }

}