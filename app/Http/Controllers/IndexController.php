<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ceo;
use App\Chief;
use App\Menager;
use App\Leader;
use App\Senior;
use App\Worker;

class IndexController extends Controller
{
    public function getMain(){
    	$ceos=Ceo::all();
    	$chiefs=Chief::all();
    	$menagers1=Menager::get()->where('chiefs_id', 1);
    	$menagers2=Menager::get()->where('chiefs_id', 2);
    	$count=$menagers1->count();     	   	
    	$leaders1=Leader::get()->where('menagers_id', 1);
    	$leaders2=Leader::get()->where('menagers_id', 2);
    	$leaders3=Leader::get()->where('menagers_id', 3);
    	$seniors1=Senior::get()->where('leaders_id', 1);
    	$seniors2=Senior::get()->where('leaders_id', 2);
    	$seniors3=Senior::get()->where('leaders_id', 3);
    	$seniors4=Senior::get()->where('leaders_id', 4);
    	$seniors5=Senior::get()->where('leaders_id', 5);
    	$workers1=Worker::get()->where('seniors_id', 1);
    	return view ('welcome', compact('ceos', 'chiefs', 'menagers1', 'menagers2', 'leaders', 'seniors', 'workers1', 'count'));

    }
}
