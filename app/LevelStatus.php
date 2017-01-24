<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelStatus extends Model
{
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
