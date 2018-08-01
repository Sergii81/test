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
    	$m=Chief::where('id', 1)->get();
    	$menagers=Menager::find(1);
    	$chief=$menagers->chief->name;
    	$menagers1=Menager::get()->where('chief_id', 1);

    	$menagers2=Menager::get()->where('chief_id', 2);

    	$count=$menagers1->count();     	   	
    	$leaders1=Leader::get()->where('menager_id', 1);
    	$leaders2=Leader::get()->where('menager_id', 2);
    	$leaders3=Leader::get()->where('menager_id', 3);
    	$seniors1=Senior::get()->where('leader_id', 1);
    	$seniors2=Senior::get()->where('leader_id', 2);
    	$seniors3=Senior::get()->where('leader_id', 3);
    	$seniors4=Senior::get()->where('leader_id', 4);
    	$seniors5=Senior::get()->where('leader_id', 5);
    	$workers1=Worker::get()->where('senior_id', 1);
    	return view ('welcome', compact('ceos', 'chief', 'menagers1', 'menagers2', 'leaders', 'seniors', 'workers1', 'count', 'm'));

    }
}
