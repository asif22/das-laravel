<?php

class Upload extends Eloquent  {

	protected $table = 'uploads';
	protected $guarded =array('id');
	
	public static $rules = array(
		'docDate' => 'required|date',
	//	'docTitle' => 'required' ,
		'docFilename' => 'required'
	);
	
	public static $messages = array(
		'docDate.required' => 'You must select a date.' ,
		'docFilename.required' => 'You must choose a file.'		
	);
	
	public static function validate($data) {
		return Validator::make($data, static::$rules, static::$messages);	
	}
	
}
