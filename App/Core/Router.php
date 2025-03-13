<?php
namespace App\Core;
use App\Controller\Controller;
class Router
{
    private static array $routes = [];
    public static function add($route = "", $controller = "")
    {
        if(!empty($route) && !empty($controller)){
            array_push(self::$routes, [
                "route" => $route,
                "controller" => $controller
            ]);
        }
    }
    public static function run()
    {
        $url_path = parse_url($_SERVER["REQUEST_URI"])["path"];
        for ($i=0; $i < count(self::$routes); $i++) { 
            
            $pattern = preg_replace("#\{\w+\}#", "([^\/]+)", self::$routes[$i]['route']);
            
            if(preg_match("#^$pattern$#", $url_path, $matches)){

                $array_control = explode("@", self::$routes[$i]['controller']);
                $controller_name = "\\App\\Controller\\" . $array_control[0];
                $action = $array_control[1];
                $controller = new $controller_name();
                $controller -> $action($matches[1] ?? "");
                return;
            };
        }
        Controller::notFound();
    }
}