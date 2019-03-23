<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    // property database column name

    public function user_one(){
        return $this->belongsTo("App\UserOne","user_id");
    }
}
