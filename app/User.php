<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function exer_logs()
    {
        return $this->hasMany('App\ExerLog');
        // return 1;
    }

    public function addExerLog(ExerLog $exerLog)
    {
        return $this->exer_logs()->save($exerLog);
    }

    public function friends()
    {
        return $this->hasMany('App\Friend');
        // return 1;
    }

    public function addFriend($fd_id)
    {
        return $this->friends()->create(['fd_id' => $fd_id]);
    }

    public function fans()
    {
        return $this->hasMany('App\Fan');
        // return 1;
    }

    public function addFan($fan_id)
    {
        return $this->fans()->create(['fan_id' => $fan_id]);
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
        // return 1;
    }

    public function addGroup()
    {
        // return $this->groups()->save($group);
        return $this->groups()->create(['name' => 'xiaozu4', 'intro'=>'zheshi']);
    }

    public function topics()
    {
        return $this->hasMany('App\Topic');
        // return 1;
    }

    public function addTopic()
    {
        // return $this->groups()->save($group);
        return $this->topics()->create([]);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
        // return 1;
    }

    public function addComment()
    {
        // return $this->groups()->save($group);
        return $this->comments()->create();
    }

    public function singleActs()
    {
        return $this->hasMany('App\SingleAct');
        // return 1;
    }

    public function addSingleAct(SingleAct $singleAct)
    {
        return $this->singleActs()->save($singleAct);
    }

    public function userDtl()
    {
        return $this->hasOne('App\UserDtl');
        // return 1;
    }
}
