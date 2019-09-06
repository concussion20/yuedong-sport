<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDtl extends Model
{
    //
    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
