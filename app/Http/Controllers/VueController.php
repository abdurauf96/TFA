<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TrenerResource;
use App\Worker;

class VueController extends Controller
{
    public function allTreners($locale)
    {
    	$treners=Worker::all();
    	if (\Voyager::translatable($treners)) {
    		$treners=$treners->translate($locale, 'en');
    	}
    	return TrenerResource::collection($treners);
    }

    public function searchTrener($key)
    {
    	$treners=Worker::where('name', 'LIKE', '%'.$key.'%')->get();
    	return $treners;
    	
    }
}
