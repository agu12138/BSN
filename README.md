# BSN
venyuan-bsn

------------------------

```
Test.php

<?php

require __DIR__.'/vendor/autoload.php';


$res=\venyuanbsn\BSN::sign("xxxxxxxxxxxxxxxxxxx");


$res=\venyuanbsn\BSN::Verify("xxxxxxxxxxxxxxxxxxxxxxx","xxxxxxxxxxxxxxxxxxxxxxxxxx");

```
----------------------

```
composer.json

"scripts": {
        "initBSN":"venyuanbsn\\MyClass::init",//初始化证书
        "updateBSN":"venyuanbsn\\MyClass::update" //更新证书
}

```
