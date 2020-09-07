<?php

namespace App\Extra\Response;

use App\Extra\Response\Enum;

class ResponseFactory
{

    private static function toJson($message, $code)
    {
        return response()->json(["code" => $code, "data" => $message, "times" => date("yy-m-d H:i:s",time())]);
    }

    public static function success($message)
    {
        return self::toJson($message, Enum::SUCCESS);
    }

    public static function error($message, $code = Enum::FAIL)
    {
        return self::toJson($message, $code);
    }
}
