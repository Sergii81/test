<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceo extends Model
{
    protected $table = 'ceos';

    public $fillable = ['name', 'appointment', 'employment_date', 'salary', 'avatar'];

    public function chief()
    {
    	return $this->hasMany('App\Chief'); // один СЕО имеет много подчиненных Chiefs
    }
}
