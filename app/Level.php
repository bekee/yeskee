<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	public function userLevel()
	{
		return $this->hasOne(UserLevel::class);
	}
}
