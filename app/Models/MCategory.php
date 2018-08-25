<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mission;
class MCategory extends Model
{
	protected $table = 'mission_categories';
	public $timestamps = false;

	/* Get Missions */
    public function mission() {
    	return $this->hasMany(Mission::class);
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
