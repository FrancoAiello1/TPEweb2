<?php 
require_once './Model/CommentModel.php';
require_once './api/APIView.php';

abstract class ApiController {
    protected $model; // lo instancia el hijo
    protected $view;

    private $data; 

    public function __construct() {
        $this->view = new APIView();
        $this->data = file_get_contents("php://input"); 
    }

    function getData(){ 
        return json_decode($this->data); 
    }  
    public function getComments()
    {
        $a = $this->model->getComments();
        $this->view->response($a, 200);
    }

    public function getComment($params = [])
    {
        $id = $params[':ID'];
        $a = $this->model->get($id);
        if ($a)
            $this->view->response($a, 200);
        else
            $this->view->response("no hay comentarios", 200);
    }


    public function comment($params = [])
    {
        $id = $params[':ID'];
        $a = $this->model->a_comentary($id);
        if ($a)
            $this->view->response($a, 200);
        else
            $this->view->response("no existe el comentario con el id {$id}", 404);
    }

    public function deleteComment($params = [])
    {
        $id = $params[':ID'];
        $a = $this->model->selectComment($id);
        if (empty($a)) {
            $this->view->response("El comentario con el id número {$id} no existe", 404);
            die();
        }
        $this->model->deleteComment($id);
        $this->view->response("El comentario con el id número {$id} fue borrado", 200);
    }

    public function addComment($params = [])
    {
        $body = $this->getData();

        $comentario = $body->comentario;
        $puntaje = $body->puntaje;
        $usuario = $body->id_usuario;
        $auto = $body->id_auto;
        $completo = $this->model->insertComment($comentario, $puntaje, $usuario, $auto); 
      
       if ($completo){
        $this->view->response("Se agrego el comentario", 200);
        } else{
        $this->view->response("No se puedo agregar el comentario", 500);
        }
      
    }
}

