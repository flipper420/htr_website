<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LCategory extends Model
{
	public $timestamps = false;
	protected $table = 'library_categories';

	protected $fillable = [
		'name',
		'description',
		'slug',
		'exts_allowed',
	];

	// TODO: add docbloc

	public function tutorials()
	{
		return $this->hasMany('App\Models\Tutorial', 'category_id');
	}

	// TODO: add docbloc

	public function archives()
	{
		return $this->hasMany('App\Models\Archive', 'category_id');
	}

	// TODO: add docbloc

	public function library()
	{
		return $this->hasMany('App\Models\Library', 'category_id');
	}

	// TODO: add docbloc

	public function articles()
	{
		return $this->hasMany('App\Models\Article', 'category_id');
	}

	public function manuals()
	{
		return $this->hasMany('App\Models\Manual', 'category_id');
	}

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
