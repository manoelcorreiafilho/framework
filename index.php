<?php
use App\Controller\Controller;
use App\Core\Router;
require_once "autoload.php";
Router::add("/", "LoginController@index");
Router::add("/login", "LoginController@login");
Router::add("/registering", "loginController@registering");
Router::add("/register", "loginController@register");
Router::add("/view/{username}", "HomeController@index");
Router::add("/admin", "AdminController@index");
Router::run();