<?php
use App\Controller\Controller;
use App\Core\Router;
require_once "autoload.php";
Router::add("/", "PessoaController@index");
Router::add("/users", "PessoaController@users");
Router::run();