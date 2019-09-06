<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usr extends Model
{
    //
    public function exer_logs()
    {
        return $this->hasMany('App\ExerLog');
        // return 1;
    }

    public function addExerLog(ExerLog $exerLog)
    {
        return $this->exer_logs()->save($exerLog);
    }

    // public function addComment(Comment $comment, User $user)
    // {
    //     $comment->user_id = $userId;
        
    //     return $this->comments()->save($comment);
    // }
}
