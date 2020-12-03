<?php

require_once "./View/TablaAdminView.php";
require_once "./Model/TablaAdminModel.php";
require_once "./View/TablaView.php";
require_once "./Model/TablaModel.php";
class TablaAdminController
{

    private $view;
    private $model;

    function __construct()
    {
        $this->view = new TablaAdminView();
        $this->model = new TablaAdminModel();

        $this->model2 = new TablaModel();
    }

    function Logout()
    {
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }

    function VendedoresLoggedVolver()
    {
        header("Location: " . BASE_URL . "loggedvendedores");
    }

    function VendedoresLoggedVolverHome()
    {
        header("Location: " . BASE_URL . "loggedhome");
    }

    function getUserName()
    {
        if (isset($_SESSION['USER']))
            return $_SESSION['USER'];
    }


    function CheckLoggedIn()
    {
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

    function LoggedHome()
    {
        $this->CheckLoggedIn();
        $username = $this->getUserName();
        $admin=$this->model->getIfAdmin($username);
        $inv = $this->model->GetInventario();
        $vend = $this->model->GetVendedores();
        $this->view->ShowLoggedHome($inv, $vend, $admin);
    }

    function LoggedVendedores()
    {
        $this->CheckLoggedIn();
        $username = $this->getUserName();
        $admin=$this->model->getIfAdmin($username);
        $vend = $this->model->GetVendedores();
        $inv = $this->model->GetInventario();
        $this->view->ShowLoggedVendedores($vend, $inv, $admin);
    }

    function LoggedAutosVendedor($params = null)
    {
        $this->CheckLoggedIn();
        $id_vendedor = $params[':ID'];
        $autosvend = $this->model->GetAutosVendedor($id_vendedor);
        $this->view->ShowLoggedAutosVendedor($autosvend);
    }

    function AbmAdmin()
    {
        $this->CheckLoggedIn();
        $users = $this->model->GetUsuarios();
        $this->view->ShowAdminAbm($users);
    }

    function DetalleAuto($params = NULL){
        $id_auto = $params[':ID'];
        $detalleauto = $this->model2->GetAuto($id_auto);
        $admin = array(new \stdClass);
        $admin[0]->admin=0;
        $id_user = array(new \stdClass);
        $id_user[0]->id=0;
        $logged = 0;
        $this->view->ShowDetalles($detalleauto,$admin,$id_user,$logged);
    }

    function InsertarAuto()
    {
        $this->CheckLoggedIn();
        $modelo = $_POST['input_modelo'];
        $año = $_POST['input_año'];
        $kms = $_POST['input_kms'];
        $potencia = $_POST['input_potencia'];
        $peso = $_POST['input_peso'];
        $consumo = $_POST['input_consumo'];
        $id_vendedor = $_POST['input_vendedor'];
        $detalle = $_POST['input_detalle'];

        $this->model->InsertAuto($modelo, $año, $kms, $potencia, $peso, $consumo, $detalle, $id_vendedor);
        $this->view->ShowLoggedHomeLoc();
    }

    function DeleteAuto($params = null)
    {
        $this->CheckLoggedIn();
        $id_auto = $params[':ID'];
        $this->model->DeleteAuto($id_auto);
        $this->view->ShowLoggedHomeLoc();
    }

    function DetalleAutoLogged($params = NULL){
        $this->CheckLoggedIn();
        $id_auto = $params[':ID'];
        $detalleauto = $this->model2->GetAuto($id_auto);
        $username = $this->getUserName();
        $admin=$this->model->getIfAdmin($username);
        $id_user=$this->model->getIdByName($username);
        $logged = 1;
        $this->view->ShowDetalles($detalleauto,$admin,$id_user,$logged);
        
    }

    function ModificaAuto()
    {
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
        $this->model->ModificarAuto($modelo, $año, $kms, $potencia, $peso, $consumo, $detalle, $id_vendedor, $id_auto);
        $this->view->ShowLoggedHomeLoc();
    }

    function EditarAuto($params = null)
    {
        $this->CheckLoggedIn();
        $id_auto = $params[':ID'];
        $vend = $this->model->GetVendedores();
        $auto = $this->model->GetToModify($id_auto);
        $this->view->ShowEditAuto($vend, $auto);
    }

    function EditarVend($params = null)
    {
        $this->CheckLoggedIn();
        $id_vend = $params[':ID'];
        $vend = $this->model->GetToModifyV($id_vend);
        $this->view->ShowEditVend($vend);
    }

    function InsertarVendedor()
    {
        $this->CheckLoggedIn();
        $nombre = $_POST['input_nombre'];
        $edad = $_POST['input_edad'];
        $ciudad = $_POST['input_ciudad'];
        $email = $_POST['input_email'];

        $this->model->InsertVendedor($nombre, $edad, $ciudad, $email);
        $this->view->ShowLoggedVendLoc();
    }

    function ModificaVendedor()
    {
        $this->CheckLoggedIn();

        $nombre = $_POST['input_nombre'];
        $edad = $_POST['input_edad'];
        $ciudad = $_POST['input_ciudad'];
        $email = $_POST['input_email'];
        $id_vendedor = $_POST['input_idvendedor'];

        $this->model->ModificarVendedor($nombre, $edad, $ciudad, $email, $id_vendedor);
        $this->view->ShowLoggedVendLoc();
    }

    function DeleteVendedor($params = null)
    {
        $this->CheckLoggedIn();
        $id_vendedor = $params[':ID'];
        $this->model->DeleteVendedor($id_vendedor);
        $this->view->ShowLoggedVendLoc();
    }

    function DeleteUser($params = null)
    {
        $this->CheckLoggedIn();
        $id = $params[':ID'];
        $this->model->DeleteUser($id);
        $this->view->ShowAdminAbmLoc();
    }

    function RemoveAdmin($params = null)
    {
        $this->CheckLoggedIn();
        $id = $params[':ID'];
        $this->model->RemoveAdmin($id);
        $this->view->ShowAdminAbmLoc();
    }
    function AddAdmin($params = null)
    {
        $this->CheckLoggedIn();
        $id = $params[':ID'];
        $this->model->AddAdmin($id);
        $this->view->ShowAdminAbmLoc();
    }
}
