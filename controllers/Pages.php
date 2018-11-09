<?php

use core\Controller;
use core\Layout;
class Pages extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        
        $Viewindex = new Layout("Pages/index.php");
    }

}