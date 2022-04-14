<?php
namespace venyuanbsn;

class BSN
{
    /**
     * string value
     */
    static function sign($value)
    {
        return shell_exec(dirname(__FILE__) . "\ECDSA.exe sign " . base64_encode($value));
    }

    /**
     * string value
     */
    static function hash($value)
    {
        return shell_exec(dirname(__FILE__) . "\ECDSA.exe hash" . base64_encode($value));
    }

    /**
     * string mac
     * string value
     */
    static function Verify($mac, $value)
    {
        return shell_exec(dirname(__FILE__) . "\ECDSA.exe verify " . $mac . " " .base64_encode($value));
    }
}
