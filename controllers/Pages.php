<?php

use core\Controller;
use core\Views;
class Pages extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        
        $Viewindex = new Views("Pages/index.php");
    }

}