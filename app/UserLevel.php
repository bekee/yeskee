<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
	public function level()
	{
		return $this->belongsTo(Level::class);
	}
	
	public function payment()
	{
		return $this->hasOne(Payment::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function levelStatus()
	{
		return $this->belongsTo(LevelStatus::class);
	}
}
