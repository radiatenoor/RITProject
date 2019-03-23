<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOne extends Model
{
    protected $table = "user_one";

    public function user_post(){
        return $this->hasMany('App\UserPost','user_id','id');
    }
}
