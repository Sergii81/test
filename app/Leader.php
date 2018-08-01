<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $table = 'leaders';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'menager_id'];

    public function senior()
    {
    	return $this->hasMany('App\Senior'); // один Leader имеет много подчиненных Seniors
    }

    public function menager()
    {
    	return $this->belongsTo('App\Menager');
    }
}
