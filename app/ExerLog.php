<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerLog extends Model
{
    //
    protected $fillable = ['exer_type','t_start','distance','duration','calorie','steps'];

    // 注意这里usr应该是单数形式
    public function user()
    {
       return $this->belongsTo('App\User');
        
        // 如果你使用的是PhpStrom编辑器，你也可以按下面这么写，这样点击可以跳转到对应的类文件中
        // return $this->belongsTo(Usr::class);
    }

    public function by(User $user)
    {
        $this->user_id = $user->id;
    }
}
