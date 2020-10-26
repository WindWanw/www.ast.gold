<?php

namespace App\Http\Middleware;

use Closure;

class ResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $_response = $response->original;

        $this->check($_response);

        $data = $this->getResponse($_response);

        return response()->json($data);

    }

    private function getResponse($_data)
    {
        list($code, $data) = $_data;

        return [
            "code" => $code,
            "data" => $data,
            "times" => date("Y-m-d H:i:s", time()),
        ];
    }

    private function check($data)
    {
        switch (false) {
            case is_array($data):
                $this->exception("Response data error, must be in array format!");
                break;
            case count($data) == 2:
                $this->exception("The response data is wrong, the response code and response message body must be included!");
                break;
            case \is_numeric(head($data)):
                $this->exception("The first digit of the response data must be a number, which represents the response code!");
                break;
        }

    }

    private function exception($msg)
    {
        throw new \Exception($msg);
    }
}
