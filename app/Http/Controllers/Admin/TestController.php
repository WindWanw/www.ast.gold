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
        $list = [
            [
                "path" => '/home',
                "name" => 'home',
                "meta" => [
                    "parent" => '',
                    "name" => '首页',
                    "iconfont" => 'iconfont iconhome_icon',
                    "needLogin" => true,
                ],
                "children" => [],
            ],
            [
                "path" => '/announcementManage',
                "name" => 'announcementManage',
                "redirect" => '/broadcast',
                "meta" => [
                    "parent" => '',
                    "name" => '公告管理',
                    "iconfont" => 'iconfont iconicon-paper',
                    "needLogin" => true,
                ],
                "children" => [[
                    "path" => '/broadcast',
                    "name" => 'broadcast',
                    "meta" => [
                        "parent" => '公告管理',
                        "name" => '系统广播',
                        "iconfont" => 'iconfont iconzhaobiaogonggao',
                        "needLogin" => true,
                    ],
                ]],
            ],
        ];

        return R::ok($list);

    }

}
