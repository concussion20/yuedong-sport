<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    //
    protected $fillable = ['fan_id'];

    // 注意这里user应该是单数形式
    public function user()
    {
       return $this->belongsTo('App\User');
    }

    // public function by(User $user)
    // {
    //     $this->user_id = $user->id;
    // }
}
