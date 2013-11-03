<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	
	//protected $fillable = array('*');
	protected $fillable = array('id','fullname', 'password', 'email');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	 
	 
/* 	public static $rules = array(
		'id' => 'required',
		'password' => 'required'
	);
	
	public static $messages = array(
		'id.required' => 'You must enter the username.' ,
		'password.required' => 'You must enter the password.'		
	); */
	 
	 
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

/* 	public static function validate($data) {
		return Validator::make($data, static::$rules, static::$messages);	
	}	 
*/
	
}