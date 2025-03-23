<?php
use App\Controller\Controller;
use App\Core\Router;
require_once "autoload.php";
Router::add("/", "InitController@index");
Router::add("/exemple", "InitController@exemp");
Router::run();