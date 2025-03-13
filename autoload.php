<?php
spl_autoload_register(function ($class){
    $class_file = str_replace("\\", "/", $class) . ".php";
    if(file_exists($class_file)){
        require $class_file;
    }else{
        echo "Arquivo não encontrado";
    }
});