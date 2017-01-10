<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
	public function client()
	{
		return $this->hasOne(UserBank::class,'bank_id');
	}
}
