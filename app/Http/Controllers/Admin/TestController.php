<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Facades\App\Extra\Character;

class TestController extends Controller
{
    //

    public function index(Request $r){

        $c=Character::getFirstChinesePinyin($r->c);

        echo $c;
    }
}
