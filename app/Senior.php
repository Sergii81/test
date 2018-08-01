<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senior extends Model
{
    protected $table = 'seniors';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'leader_id'];

    public function worker()
    {
    	return $this->hasMany('App\Worker'); // один Senior имеет много подчиненных Workers
    }

    public function leader()
    {
    	return $this->belongsTo('App\Leader');
    }
}
