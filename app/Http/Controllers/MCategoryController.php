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
		$categories = MCategory::with('mission')->get();
		return view('missions.index', compact('categories'));
	}

	// TODO: add docbloc
	public function show(MCategory $slug)
	{
		return view('missions.cat.index', compact('slug'));
	}
}
