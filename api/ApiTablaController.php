<?php

require_once './Model/TablaModel.php';
require_once 'ApiController.php';

class ApiTablaController extends ApiController
{


    function __construct()
    {
        parent::__construct();
        $this->view = new APIView();
        $this->model = new TablaModel();
    }

    public function GetInv($params = null)
    {
        $inv = $this->model->GetInventario();
        $this->view->response($inv, 200);
    }

    function DetalleAuto($params = NULL)
    {
        $id_auto = $params[':ID'];
        $detalleauto = $this->model->GetAuto($id_auto);
        if (!empty($detalleauto)) 
            $this->view->response($detalleauto, 200);
        else
            $this->view->response("El auto con el id=$id_auto no existe", 404);
    }

    public function GetVend($params = null)
    {
        $vend = $this->model->GetVendedores();
        $this->view->response($vend, 200);
    }

    function GetAutosVend($params = NULL)
    {
        $id_vend = $params[':ID'];
        $autosvend = $this->model->GetAutosVendedor($id_vend);
        if (!empty($autosvend)) 
            $this->view->response($autosvend, 200);
        else
            $this->view->response("El vendedor con el id=$id_vend no existe", 404);
    }
     function csr(){
         $this->view->
     }
}
