<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menager extends Model
{
    protected $table = 'menagers';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'chief_id'];

    public function leader()
    {
    	return $this->hasMany('App\Leader'); // один Menager имеет много подчиненных Leaders
    }

    public function chief()
    {
    	return $this->belongsTo('App\Chief');
    }
}
