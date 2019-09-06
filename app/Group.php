<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = [
        'name', 'intro'
    ];
    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function groupMbrs()
    {
        return $this->hasMany('App\GroupMbr');
        // return 1;
    }

    public function addGroupMbr($mbr_id)
    {
        return $this->groupMbrs()->create(['mbr_id' => $mbr_id]);
    }
}
