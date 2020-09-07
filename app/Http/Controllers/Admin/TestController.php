<?php

namespace App\Http\Controllers\Admin;

use App\Extra\Response\ResponseFactory as R;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    //

    public function index(Request $r)
    {

        $list = $this->run();

        return R::success($list);
    }

    public function run()
    {

        return $this->message();
    }



    public function message(){

        // return Redis::publish("Chinese","Welcome to China");

        return Redis::subscribe(["Chinese"]);
    }

    public function sortedSet()
    {

        // Redis::zadd("people",["tom"=>24,"mick"=>26,"mary"=>23,"jick"=>20,"mark"=>25,"jerry"=>21]);


        // return Redis::zremrangebyrank("people",0,2);

        return Redis::zrange("people",0,-1);

        // return Redis::zadd("score", [
        //     "tom" => 90,
        //     "jerry" => 88,
        //     "mick" => 70,
        //     "mary" => 85,
        // ]);

        // return Redis::zadd("score",["mick"=>75]);

        // return Redis::zscore("score","mary");

        // return Redis::zrangebyscore("score", "10","+inf",["limit"=>[3,2]]);

        // return Redis::zrevrangebyscore("score","100","50");

        // return Redis::zincrby("score","tom","+2");
    }

    public function set()
    {

        // return Redis::sadd("set_m",1,2);
        // return Redis::smembers("set_m");
        // return Redis::sismember("set_m",2);

        // return Redis::scard("set_m");

        // return Redis::srandmember("set_m");

        // Redis::sadd("set_m",3,4,5,6,7,8,9);
        // // Redis::srem("set_m","Array");

        // return Redis::smembers("set_m");

        return [Redis::spop("set_m"), Redis::srandmember("set_m", Redis::scard("set_m") + 1)];
    }

    function list() {

        // Redis::lpush("n",1,2,3,4,5,6);

        Redis::rpoplpush("n", "m");

        return [Redis::lrange("n", 0, Redis::llen("n")), Redis::lrange("m", 0, Redis::llen("m"))];

        // Redis::linsert("numbers","before",4,10);

        // Redis::ltrim("numbers",3,5);

        // return Redis::lrange("numbers",0,-1);

        // Redis::lset("numbers",2,6);

        // return Redis::lindex("numbers",2);

        // Redis::lrem("numbers",1,2);

        // Redis::lrem("numbers",-1,3);

        // Redis::lrem("numbers",0,6);

        // Redis::lpush("numbers",1,2,3,4,5,6);

        // return Redis::lrange("numbers",0,Redis::llen("numbers"));

        // return Redis::lrange("l", "0", "3");

        // return Redis::lrange("l","-3","-1");

        // return Redis::rpush("l", "3","4");
        // return Redis::llen("l");
    }

    public function hash()
    {

        // return Redis::hlen("user");

        // return Redis::hvals("user");

        // return Redis::hkeys("user");

        // Redis::hincrby("user","age",10);

        // return Redis::hget("user","age");

        // return Redis::hexists("user","name");

        // return Redis::hmget("user",["name","age","height"]);

        // Redis::hmset("user", ["height" => 173, "like" => \serialize(["study", "play"])]);

        // return Redis::hgetall("user");

        // return Redis::hset("user","name","ww");

        // return Redis::hgetall("user");
        // Redis::hset("user","name","wanwei");
        // Redis::hset("user","age",24);

        // return Redis::hget("user","name");
    }

    public function string()
    {

        Redis::mset([
            "a" => 1,
            "b" => 2,
            "c" => 3,
        ]);

        return Redis::mget(["a", "b", "c"]);

        // return Redis::mget(["name","age"]);

        // return Redis::strlen("speak");

        // Redis::set("speak","我是中国人");

        // Redis::append("speaks",",我爱我的祖国");

        // return Redis::get("speaks");

        // Redis::set("say","hello");

        // Redis::append("say"," world");

        // return Redis::get("say");

        // Redis::set("height",173.5);

        // Redis::incrbyfloat("height",3.6);

        // return Redis::get("height");

        // Redis::set("age",24);

        // Redis::incrby("age",3);
        // Redis::decrby("age",10);

        // return Redis::get("age");

        // return Redis::keys("*");

        // Redis::set("age","asd");

        // Redis::incr("age");

        // $info=[
        //     "name"=>"wanwei",
        //     "age"=>24,
        //     "sex"=>"男"
        // ];

        // $data=\serialize($info);

        // Redis::set("user_info",$data);

        // return \unserialize(Redis::get("user_info"));
    }
}
