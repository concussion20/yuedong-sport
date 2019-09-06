<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $fillable = ['fd_id'];

    // 注意这里user应该是单数形式
    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
