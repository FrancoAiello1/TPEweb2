<?php

require_once "./libs/Smarty/Smarty.class.php";

class UserView{

    private $title;

    function __construct(){
        $this->title = "Login";
    }

    function ShowLogin($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl');
    }

}
