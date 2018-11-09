<?php
namespace core;

class Autoload 
{
    public function __construct()
    {
        spl_autoload_register(function($class_name){
            $core_path = "./core/{$class_name}.php";
            $model_path = "./models/{$class_name}.php";
            $controller_path = "./ccontrollers/{$class_name}.php";
            if (file_exists($core_path))  require_once($core_path); 
            if (file_exists($model_path))  require_once($model_path); 
            if (file_exists($controller_path))  require_once($controller_path); 
        });
        
    }
}
