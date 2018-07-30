<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chief extends Model
{
    protected $table = 'chiefs';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'ceos_id'];

    public function menagers()
    {
    	return $this->hasMany('App\Menager'); // один Chief имеет много подчиненных Menagers
    }

    public function ceos()
    {
    	return $this->belongsTo('App/Ceo');
    }
}
