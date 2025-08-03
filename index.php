<?php
use App\Core\Router;
require_once "autoload.php";
Router::add("/", "LoginController@index");
Router::add("/register", "RegisterController@index");
Router::run();