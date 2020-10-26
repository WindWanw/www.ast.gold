<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //
    protected $table = "user_infos";

    protected $fillable = ["user_id", "name", "nickname", "age", "last_name", "full_name", "sex"];

    protected $appends = ['user_name'];

    protected $hidden = ["name"];

    public function getSexAttribute($value)
    {
        return $value ? '男' : '女';
    }

    public function getUserNameAttribute()
    {

        return $this->attributes["last_name"] . $this->attributes["full_name"];
    }
}
