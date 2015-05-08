<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firs_name', 'last_name','type','email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function getFullNameAttribute()
	{
		return $this->firs_name.' '.$this->last_name;
	}
	public function setPasswordAttribute($value)
	{
		if (!empty($value))
		{
			$this->attributes['password']=\Hash::make($value);
		}
	}

	public function scopeName($query, $name)
	{
		if(trim($name)!="")
		{
			$query->where(\DB::raw("  firs_name + ' ' + last_name" ), "like" ,"%$name%");
		}
	}

}
