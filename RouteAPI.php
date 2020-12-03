<?php

require_once 'RouterClass.php';
require_once 'api/ApiCommentController.php';

$r = new Router();

//$r->addRoute('comentario/:ID', 'GET', 'ApiCommentController', 'comment');
$r->addRoute('comentarios', 'GET', 'ApiCommentController', 'getAllComments');
$r->addRoute('comentarios/:ID', 'GET', 'ApiCommentController', 'getComment');
$r->addRoute('deleteComentario/:ID', 'DELETE', 'ApiCommentController', 'deleteComment');
$r->addRoute('addComentario', 'POST', 'ApiCommentController', 'addComment');

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);