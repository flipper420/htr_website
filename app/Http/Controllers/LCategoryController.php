<?php

namespace App\Http\Controllers;

use App\Models\LCategory;

class LCategoryController extends Controller
{
	// TODO: add docbloc
	public function index()
	{
		$categories = LCategory::get();
		return view('library.index', compact('categories'));
	}

	// TODO: add docbloc
	public function show(LCategory $slug)
	{
		return view('library.cat.index', compact('slug'));
	}

	// TODO: add docbloc
	public function store(Request $request)
	{
		$request->logo->storeAs('logos', $request->logo->getClientOriginalName());
	}
}
