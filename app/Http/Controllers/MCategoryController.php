<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\MCategory;
use \App\Models\Mission;

class MCategoryController extends Controller
{

	// TODO: add docbloc
	public function index()
	{
		$categories = MCategory::get();

		$count = [];
		$i = 0;
		foreach ($categories as $cat) {
			//$count[$i] = Mission::get()->where('category_id', $cat->id)->count();
			$count[ $i ] = MCategory::find($i + 1)->mission()->groupBy('category_id')->selectRaw('count(*) as agg')->value('agg');
			$i++;
		}
		return view('missions.index', compact('categories', 'count'));
	}

	// TODO: add docbloc
	public function show(MCategory $slug)
	{
		return view('missions.cat.index', compact('slug'));
	}
}
