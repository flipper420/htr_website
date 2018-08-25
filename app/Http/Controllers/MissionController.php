<?php

namespace App\Http\Controllers;
use \App\Models\Category;
class MissionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $slug)
    {
        return view('missions.noob.index', compact('slug'));
    }
}
