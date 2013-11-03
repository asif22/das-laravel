@extends('layouts.master')
@section('content')

	<div>		
		<div class="col-lg-offset-6"><h3 >Log In</h3></div>
		
		{{	Form::open( array( 'url' =>'login',  'class' => 'form-horizontal' ) )	}}
		

			  <div class="form-group {{{ $errors->has('username') ? 'error' : '' }}}">
				<label for="username" class="col-lg-4 control-label">Username</label>
				<div class="col-lg-6">
				  <input type="text" class="form-control" name="username" id="username" placeholder="Username">			
				  <span class="inline-warning">{{ $errors->first('id') }}</span>	
				</div>
			  </div>
			  
			  
			  
			  <div class="form-group {{{ $errors->has('password') ? 'error' : '' }}}">
				<label for="password" class="col-lg-4 control-label">Password</label>
				<div class="col-lg-6">
				  <input type="password" class="form-control" name="password" id="password" placeholder="Password">			
				  <span class="inline-warning">{{ $errors->first('password') }}</span>	
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-lg-offset-4 col-lg-6">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Remember me
					</label>
				  </div>
				</div>
			  </div>
			  
			  <div class="form-group">
				<div class="col-lg-offset-4 col-lg-6">
				{{ Form::submit('Login', array('class' => 'btn btn-default')) }}
				</div>
			  </div>

	  {{	Form::close()   }}	
    </div>  
@stop




