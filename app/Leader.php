<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $table = 'leaders';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'menager_id'];

    public function seniors()
    {
    	return $this->hasMany('App\Senior'); // один Leader имеет много подчиненных Seniors
    }

    public function menagers()
    {
    	return $this->belongsTo('App/Menager');
    }
}
