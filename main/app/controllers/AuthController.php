<?php

class AuthController extends BaseController {    

	public function showLogin()
	{
		// Check if we already logged in
		if (Auth::check())
		{
			// Redirect to homepage
			return Redirect::to('')->with('success', 'You are already logged in');
		}

		// Show the login page
		return View::make('auth/login');
	}

	public function postLogin()
	{
		// id is used for login, username is used for validation to return correct error-strings
		$userdata = array(
			'id'       => Input::get('username'),
			'password' => Input::get('password')
		);
	
		$rules = array(
			'id'  => 'Required',
			'password'	=> 'Required'
		);

	    $messages = array(
		'id.required' => 'You must enter the username.' ,
		'password.required' => 'You must enter the password.'		
		);

		// Validate the inputs.
		$validator = Validator::make($userdata, $rules, $messages);

		// Check if the form validates with success.
		if ($validator->passes())
		{
	
			// Try to log the user in.
			if (Auth::attempt($userdata))
			{
				return Redirect::to('')->with('message', 'You have logged in successfully');
			}
			else
			{
				return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
			}
		}

		// Something went wrong.
		return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
	}

	public function getLogout()
	{
		// Log out
		Auth::logout();

		// Redirect to homepage
		return Redirect::to('')->with('message', 'You are logged out');
	}

	
	
	public function showChangePasswordForm()
	{
		return View::make('auth/PasswordChangeForm');
	}
	
	public function changePassword()
	{
	
		$userdata = array(

			 'current password' => Input::get('current_password') ,
			 'new password' => Input::get('new_password') ,
			 'confirmed new password' => Input::get('new_password2') 
		);
	
		$rules = array(

			 'current password'	=> 'required' ,		
			 'new password' => 'required|min:1|max:20' ,
			 'confirmed new password' => 'required|same:new password'

		 );

	    $messages = array(
			'currentPassword.required' => 'You must enter the current password.' ,
			'new password.required' => 'You must enter a new password.' ,
			'confirmed new password.required' => 'You must retype the new password.' ,		
		);

		$validator = Validator::make($userdata, $rules, $messages);
		
		if ($validator->passes())
		{
			$user = Auth::user();
			$actual_current_password = $user->password;
			
			$submitted_current_password = Input::get('current_password') ;
			
			if (Hash::check($submitted_current_password, $actual_current_password))
			{
				$new_password = Input::get('new_password') ;
				$hashed_new_password = Hash::make($new_password);				
				$user->password = $hashed_new_password;
				$user->save();	
				return Redirect::route('change_password_form')->with('message', 'Password changed successfully');
			}
			else{				
				return Redirect::to('change_password_form')->withErrors(array('current password' => 'Current password is not valid.'));
			}
			
		}
		else{
			
			return Redirect::to('change_password_form')->withErrors($validator)->withInput();

		}
	}
	
}


