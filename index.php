<?php
use App\Controller\Controller;
use App\Core\Router;
require_once "autoload.php";
Router::add("/", "HomeController@index");
Router::run();