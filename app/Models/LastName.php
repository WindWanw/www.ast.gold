<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastName extends Model
{
    //
    protected $table = "last_names";

    protected $fillable = ["last_name", "first_alp", "digits", "pinyin", "strokes", "totem", "source"];
}
