<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MCategory;
class Mission extends Model
{
	public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(MCategory::class);
    }

}
