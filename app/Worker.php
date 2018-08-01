<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar', 'senior_id'];

    public function senior()
    {
    	return $this->belongsTo('App\Senior');
    }
}
