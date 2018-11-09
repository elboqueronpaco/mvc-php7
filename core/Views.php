<?php

namespace core;

class Views
{
    public function __construct($view, $data = null)
    {
        if (file_exists("./views/$view")) {
            require("./views/$view");
        } else {
            die("{$view} no existe");
        }
    }
}