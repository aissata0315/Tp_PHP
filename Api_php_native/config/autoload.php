<?php
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));

    }
    static function autoload($class)
    {
       $class=str_replace("\\","/",$class);
       //echo $class;

       if(file_exists("../model/".$class.".php"))
       {
        require_once "../model/".$class.".php";

       }
        //namespace
       else if(str_replace("\\","/",$class.".php"))
    {
        require_once "../".$class.".php";    
    }
    }
}

Autoloader::register();