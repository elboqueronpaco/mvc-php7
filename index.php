<?php
require_once('./config/core.php');
require_once('./config/env.php');
require_once('./core/Autoload.php');
// require_once('./core/Controller.php');
// require_once('./core/Views.php');
// use core\Model;
// $connection = new Model();

if ($_GET && isset($_GET['controller'])) {
    $controller = strtolower(ucwords($_GET['controller']));
    if (file_exists("./controllers/{$controller}.php")) {
        require_once("./controllers/{$controller}.php");
    } else {
        die("El controlador {$controller} no encontrado");
    }
}else{
    $controller = CONTROLLER_DEFAULT;
    if (file_exists("./controllers/{$controller}.php")) {
        require_once("./controllers/{$controller}.php");
    } else {
        die("El controlador {$controller} no encontrado");
    }
}
$ClassController = new $controller();