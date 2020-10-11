<?php

require_once "./View/TablaAdminView.php";
require_once "./Model/TablaAdminModel.php";

class TablaAdminController
{

    private $view;
    private $model;

    function __construct(){
        $this->view = new TablaAdminView();
        $this->model = new TablaAdminModel();
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);
    }

    function VendedoresAdminVolver(){
        header("Location: " . BASE_URL . "adminvendedores");
    }

    function VendedoresAdminVolverHome(){
        header("Location: " . BASE_URL . "adminhome");
    }
    
    function CheckLoggedIn(){
        session_start();
        if (!isset($_SESSION['USER'])) {
            header("Location: " . LOGIN);
            die();
        } else {
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
                $this->Logout();
            }
        }
    }

    function AdminHome(){
        $this->CheckLoggedIn();
        $inv = $this->model->GetInventario();
        $vend = $this->model->GetVendedores();
        $this->view->ShowAdminHome($inv, $vend);
    }

    function AdminVendedores(){
        $this->CheckLoggedIn();
        $vend = $this->model->GetVendedores();
        $inv = $this->model->GetInventario();
        $this->view->ShowAdminVendedores($vend,$inv);

    }

    function AdminAutosVendedor($params = null){
        $this->CheckLoggedIn();
        $id_vendedor = $params[':ID'];
        $autosvend = $this->model->GetAutosVendedor($id_vendedor);
        $this->view->ShowAdminAutosVendedor($autosvend);
    }

    function InsertarAuto(){
        $this->CheckLoggedIn();

        $modelo = $_POST['input_modelo'];
        $año = $_POST['input_año'];
        $kms = $_POST['input_kms'];
        $potencia = $_POST['input_potencia'];
        $peso = $_POST['input_peso'];
        $consumo = $_POST['input_consumo'];
        $id_vendedor = $_POST['input_vendedor'];
        $detalle = $_POST['input_detalles'];

        $this->model->InsertAuto($modelo,$año,$kms,$potencia,$peso,$consumo,$detalle,$id_vendedor);
        $this->view->ShowAdminHomeLoc();
    }

    function DeleteAuto($params = null){
        $this->CheckLoggedIn();
        $id_auto = $params[':ID'];
        $this->model->DeleteAuto($id_auto);
        $this->view->ShowAdminHomeLoc();
    }

    function ModificaAuto(){
        $this->CheckLoggedIn();

        $modelo = $_POST['input_modelo'];
        $año = $_POST['input_año'];
        $kms = $_POST['input_kms'];
        $potencia = $_POST['input_potencia'];
        $peso = $_POST['input_peso'];
        $consumo = $_POST['input_consumo'];
        $detalle = $_POST['input_detalle'];
        $id_vendedor = $_POST['input_vendedor'];
        $id_auto = $_POST['input_idauto'];
        $this->model->ModificarAuto($modelo,$año,$kms,$potencia,$peso, $consumo,$detalle, $id_vendedor, $id_auto);
        $this->view->ShowAdminHomeLoc();
    }

    function InsertarVendedor(){
        $this->CheckLoggedIn();

        $nombre = $_POST['input_nombre'];
        $edad = $_POST['input_edad'];
        $ciudad = $_POST['input_ciudad'];
        $email = $_POST['input_email'];

        $this->model->InsertVendedor($nombre,$edad,$ciudad,$email);
        $this->view->ShowAdminVendLoc();
    }

    function ModificaVendedor(){
        $this->CheckLoggedIn();

        $nombre = $_POST['input_nombre'];
        $edad = $_POST['input_edad'];
        $ciudad = $_POST['input_ciudad'];
        $email = $_POST['input_email'];
        $id_vendedor = $_POST['input_vendedor'];

        $this->model->ModificarVendedor($nombre,$edad,$ciudad,$email,$id_vendedor);
        $this->view->ShowAdminVendLoc();
    }

    function DeleteVendedor($params = null){
        $this->CheckLoggedIn();
        $id_vendedor = $params[':ID'];
        $this->model->DeleteVendedor($id_vendedor);
        $this->view->ShowAdminVendLoc();
    }
}
