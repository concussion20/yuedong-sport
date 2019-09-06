<?php

namespace App;

//use Auth;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment;

class Topic extends Model
{
    //
    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function addComment($comment)
    {
        return $this->comments()->save($comment);
    }
}
