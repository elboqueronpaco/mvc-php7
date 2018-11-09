<?php
require_once('./core/Controller.php');
use core\Controller;

class Pages extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        echo "Bienvenido al método index";
    }

}