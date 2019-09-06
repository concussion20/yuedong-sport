<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleActMbr extends Model
{
    //
    protected $fillable = ['mbr_id'];

    public function singleAct()
    {
       return $this->belongsTo('App\SingleAct');
    }
}
