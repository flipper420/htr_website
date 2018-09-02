<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mission;

class MCategory extends Model
{
	public $timestamps = false;
	protected $table = 'mission_categories';

	/* Get Missions */

	public function mission()
	{
		return $this->hasMany(Mission::class, 'category_id');
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
