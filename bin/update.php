<?php
if(copy(getcwd()."\ECDSA.config",dirname(__FILE__)."\ECDSA.dll.config")){
    echo "ok";
}else{
    echo "error";
}