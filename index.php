<?php
require_once('./config/core.php');
require_once('./core/Autoload.php');
use core\Autoload;

$autoload = new Autoload();

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