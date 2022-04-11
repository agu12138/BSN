<?php
require __DIR__.'/vendor/autoload.php';

use LDAP\Result;
use VenYuanBSN\Config;
use VenYuanBSN\NodeServer;

function test(){
    $config=Config::initConfig([
        "reqUrl" => "https://nanjingtxynode.bsngate.com:17602",
        "appCert" => [
            "AppPublicCert" => "-----BEGIN PUBLIC KEY-----
    MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEP19sOfqSaGVzQjvNU+MTEfk8ZhaGJOnhtZGDC/Bw
    T61E+kH5cbQ12LBPYUs1QKL6uQx8MN7w/F37f5scLAF8rg==
    -----END PUBLIC KEY-----",
            "UserAppPrivate" =>"-----BEGIN PRIVATE KEY-----
    MIGTAgEAMBMGByqGSM49AgEGCCqGSM49AwEHBHkwdwIBAQQgRQDyIYYTGjG+hJdl
    TH7hXQLzYdIeLRNN98D27jjhywGgCgYIKoZIzj0DAQehRANCAATMuK3yrJklBlpB
    jZbI6Hhq5tZa4riFdnZF3Uye6RJlzqNsbuQ3KPzgTctVcEAhmuqUBxlw8MPsFhHB
    62ooCYfu
    -----END PRIVATE KEY-----"
       ],
        "appInfo"=>[ 
            "AppCode" => "app0001202203021319180253003"],
        "userCode" =>"USER0001202203010919464625764",
        "mspDir" =>"./mspdir",
        "httpsCert" => ""
    ]);
    $node=new NodeServer($config);
    $node->RegisterUser( [
        "name"=>"abc",
        "secret"=>"456"
    ]);
}

test();

