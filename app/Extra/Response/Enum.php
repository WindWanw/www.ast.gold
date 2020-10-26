<?php
namespace App\Extra\Response;

class Enum
{
    const OK = 0;

    const FAIL = 4000;

    const ERROR = 5000;

    public function __callStatic($name, $arguments)
    {

        return constant('self::' . strtoupper($name));

    }
}
