<?php

namespace core;

class LoadModel
{
    public function __construct($model)
    {
        require_once("./models/{$model}.php");
    }
}