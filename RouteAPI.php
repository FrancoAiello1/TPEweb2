<?php

require_once 'RouterClass.php';
require_once 'api/ApiCommentController.php';

$r = new Router();

$r->addRoute('comentario/:ID', 'GET', 'ApiCommentController', 'comment');
$r->addRoute('comentarios', 'GET', 'ApiCommentController', 'getAllComments'); //trae todos los comentarios
$r->addRoute('comentarios/:ID', 'GET', 'ApiCommentController', 'getComment');
$r->addRoute('deleteComentario/:ID', 'GET', 'ApiCommentController', 'deleteComment'); //borra un comentario
$r->addRoute('addComentario', 'POST', 'ApiCommentController', 'addComment'); //agrega un comentario

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);