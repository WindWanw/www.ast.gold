<?php

namespace App\Extra\Response;

use App\Extra\Response\Enum;

class ResponseFactory
{

    private static function toJson($data, $code)
    {
        return response()->json(["code" => $code, "data" => $data, "times" => date("yy-m-d H:i:s", time())]);
    }

    public static function success($message, $code = Enum::OK)
    {
        return self::toJson(["message" => $message], $code);
    }

    public static function error($message, $code = Enum::FAIL)
    {
        return self::toJson(["message" => $message], $code);
    }

    public static function ok($data, $code = Enum::OK)
    {
        return self::toJson(["list" => $data], $code);
    }
}
