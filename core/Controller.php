<?php

namespace core;

class Controller
{
    public function __construct()
    {
        if ($_GET && isset($_GET['action'])) {
            $action = $_GET['action'];
            if (method_exists($this, $action)) {
                $this->$action();
            }else {
                die("el método {$action} no existe");
            }

        }else {
            $action = ACTION_DEFAULT;
            if (method_exists($this, $action)) {
                $this->$action();
            }else {
                die("el método {$action} no existe");
            }
        }
    }
}