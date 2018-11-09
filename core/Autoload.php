<?php

function appAutoload ($className)
{
    require_once('./'.$className. '.php');
    
}
spl_autoload_register("appAutoload");
  
