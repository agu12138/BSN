<?php
if(copy(dirname(__FILE__)."\ECDSA.dll.config",getcwd()."\ECDSA.config")){
    echo "ok";
}else{
    echo "error";
}