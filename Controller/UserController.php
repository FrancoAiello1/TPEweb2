<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController
{

    private $view;
    private $model;

    function __construct()
    {
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function Login()
    {
        $this->view->ShowLogin();
    }

    function Signup()
    {
        $this->view->ShowSignup();
    }

    function VerifyUser()
    {
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if (isset($user)) {
            $userDB = $this->model->GetUser($user);

            if (isset($userDB) && $userDB) {
                if (password_verify($pass, $userDB->password)) {
                    session_start();
                    $_SESSION["USER"] = $userDB->username;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    $_SESSION['IS_ADMIN'] = $userDB->admin;
                    if ($_SESSION['IS_ADMIN'] == 1) {
                        header("Location: " . BASE_URL . "adminhome");
                    } else {
                        header("Location: " . BASE_URL . "adminhome");
                    }
                } else {
                    $this->view->ShowLogin("Contraseña incorrecta");
                }
            } else {
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }

    /*     function CheckAdmin(){
        $user = $_SESSION["USER"];
        $userDB = $this->model->GetUser($user);
        $_SESSION['IS_ADMIN'] = $userDB->admin;
        if ($_SESSION['IS_ADMIN']==1){
            return true;
        }else{ return false;
        }
    } */

    function CreateUser()
    {
        $user = $_POST["new_user"];
        $pass = $_POST["new_pass"];
        $pass_r = $_POST["repeat_pass"];
        $safe_pass = password_hash($pass, PASSWORD_DEFAULT);
        $taken = $this->model->GetUser($user);
        if ($taken == null) {
            if ($pass == $pass_r && $pass != null) {
                $this->model->NewUser($user, $safe_pass);
                if (isset($user)) {
                    $userDB = $this->model->GetUser($user);
                    if (isset($userDB) && $userDB) {
                        session_start();
                        $_SESSION["USER"] = $userDB->username;
                        $_SESSION['LAST_ACTIVITY'] = time();
                        $_SESSION['IS_ADMIN'] = $userDB->admin;
                        if ($_SESSION['IS_ADMIN'] == 1) {
                            header("Location: " . BASE_URL . "adminhome");
                        } else {
                            header("Location: " . BASE_URL . "adminhome");
                        }
                    }
                }
            } else {
                $this->view->ShowSignup("Las contraseñas no coinciden");
            }
        } else {
            $this->view->ShowSignup("El nombre de usuario ingresado ya está en uso");
        }
    }
}
