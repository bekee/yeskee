<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
	use LaratrustUserTrait;
	use Notifiable;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];
	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
	
	public function admin()
	{
		return $this->hasOne(Admin::class);
	}
	
	public function user()
	{
		return $this->hasOne(UserDetail::class);
	}
	
	public function agent()
	{
		return $this->hasOne(Agent::class);
	}
	
	public function userBank()
	{
		return $this->hasOne(UserBank::class);
	}
	
	public function userLevel()
	{
		return $this->hasMany(UserLevel::class);
	}
	
	public function mywallet()
	{
		return $this->hasMany(MyWallet::class);
	}
	public function bonus()
	{
		return $this->hasMany(Bonus::class);
	}
}
