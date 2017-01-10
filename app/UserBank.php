<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBank extends Model
{
	public function bank()
	{
		return $this->belongsTo(Banks::class);
	}
}
