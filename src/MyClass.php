<?php

namespace venyuanbsn;


class MyClass
{
    public static function init()
    {
        if(copy(dirname(__FILE__)."ECDSA.dll.config",getcwd()."ECDSA.config")){
            echo "ok";
        }else{
            echo "error";
        }
    }
    
    public static function update()
    {
        if(copy(getcwd()."ECDSA.config",dirname(__FILE__)."ECDSA.dll.config")){
            echo "ok";
        }else{
            echo "error";
        }
    }
}