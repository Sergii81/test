<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chief extends Model
{
    protected $table = 'chiefs';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'ceo_id'];

    public function menager()
    {
    	return $this->hasMany('App\Menager'); // один Chief имеет много подчиненных Menagers
    }

    public function ceo()
    {
    	return $this->belongsTo('App\Ceo');
    }
}
