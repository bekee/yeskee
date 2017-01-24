<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
	public function referral()
	{
		return $this->hasMany(UserReferer::class);
	}
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
