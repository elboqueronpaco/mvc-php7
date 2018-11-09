<?php

namespace core;

class Layout
{
    public function __construct($view, $data = null)
    {
        if (file_exists("./views/$view")) {
            if(file_exists("./views/" . HEAD_LAYOUT)) require_once("./views/". HEAD_LAYOUT);
            require("./views/$view");
            if(file_exists("./views/" . FOOTER_LAYOUT)) require_once("./views/". FOOTER_LAYOUT);
        } else {
            die("{$view} no existe");
        }
    }
}