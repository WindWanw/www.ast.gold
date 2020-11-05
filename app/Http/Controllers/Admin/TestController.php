<?php

namespace App\Http\Controllers\Admin;

use App\Extra\Response\ResponseFactory as R;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(Request $r)
    {
        // $list = [
        //     [
        //         "path" => '/layout',
        //         "name" => 'layout',
        //         "component" => "layout",
        //         "meta" => [
        //             "parent" => '',
        //             "name" => '首页1',
        //             "iconfont" => 'iconfont iconhome_icon',
        //             "isLogin" => true,
        //         ],
        //         "children" => [
        //             [
        //                 "path" => '/home',
        //                 "name" => 'home',
        //                 "component" => "home",
        //                 "meta" => [
        //                     "parent" => '',
        //                     "name" => '首页',
        //                     "iconfont" => 'iconfont iconhome_icon',
        //                     "isLogin" => true,
        //                 ],
        //                 "children" => [],
        //             ],
        //             [
        //                 "path" => '/notFound',
        //                 "name" => 'notFound',
        //                 "component" => "notFound",
        //                 "meta" => [
        //                     "parent" => '',
        //                     "name" => '404',
        //                     "iconfont" => 'iconfont iconhome_icon',
        //                     "isLogin" => true,
        //                 ],
        //                 "children" => [],
        //             ],
        //         ],
        //     ],
        // ];

        $list=\base_path();

        return R::ok($list);

    }

}
