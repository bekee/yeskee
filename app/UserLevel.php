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
	
	public function y()
	{
		return $this->belongsTo(User::class, 'left_leg');
	}
	
	public function e()
	{
		return $this->belongsTo(User::class, 'right_leg');
	}
	
	public function s()
	{
		return $this->belongsTo(User::class, 'left_leg1');
	}
	
	public function k()
	{
		return $this->belongsTo(User::class, 'left_leg2');
	}
	
	public function e1()
	{
		return $this->belongsTo(User::class, 'right_leg1');
	}
	
	public function e2()
	{
		return $this->belongsTo(User::class, 'right_leg2');
	}
}
