<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function Login(){
        $this->view->ShowLogin();
    }

    function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userDB = $this->model->GetUser($user);

            if(isset($userDB) && $userDB){
                if (password_verify($pass, $userDB->password)){
                    session_start();
                    $_SESSION["USER"] = $userDB->username;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    header("Location: " . BASE_URL . "adminhome");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }
            }else{
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }
}