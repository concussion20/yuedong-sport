<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleAct extends Model
{
    //
	protected $fillable = ['name','exer_type','intro','t_start','t_end','prtp_mode'];

    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function singleActMbrs()
    {
        return $this->hasMany('App\SingleActMbr');
        // return 1;
    }

    public function addSingleActMbr($mbr_id)
    {
        return $this->singleActMbrs()->create(['mbr_id' => $mbr_id]);
    }
}
