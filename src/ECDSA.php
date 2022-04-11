<?php

namespace venyuanbsn;

class BSN
{
    /**
     * string value
     */
    static function sign($value)
    {
        return system(dirname(__FILE__) . "\ECDSA.exe verify " . $value);
    }

    /**
     * string value
     */
    static function hash($value)
    {
        return system(dirname(__FILE__) . "\ECDSA.exe verify" . $value);
    }

    /**
     * string mac
     * string value
     */
    static function Verify($mac, $value)
    {
        return system(dirname(__FILE__) . "\ECDSA.exe verify " . $mac . " " . $value);
    }
}
