<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Point extends Model
{
	public $fillable = ['user_id', 'points', 'reason', 'dir'];

	public function users()
	{
		return $this->hasMany('App\Models\User');
	}

	public function addReward($uid, $reward, $reason)
	{
		Point::create(['user_id' => $uid,
		               'points'  => $reward,
		               'reason'  => $reason,
		               'dir'     => 'add',
		]);
	}
}
