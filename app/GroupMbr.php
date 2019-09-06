<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMbr extends Model
{
    //
    protected $fillable = ['mbr_id'];
    
    public function group()
    {
       return $this->belongsTo('App\Group');
    }

}
