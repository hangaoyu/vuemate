<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $guarded=['_token','author'];
//    protected $fillable=['title','body','abstract'];
}
