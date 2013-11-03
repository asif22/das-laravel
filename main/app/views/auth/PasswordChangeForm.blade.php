@extends('layouts.master')
@section('content')

	<div>	
		<h3 >Change Password</h3>	  <!--   class="horizontal-middle"   -->
		
		{{	Form::open( array( 'url' =>'change_password',  'class' => 'form-horizontal' ) )	}}   	

	  <div class="form-group">
			{{	Form::label('current_password','Current Password', array('class' => 'col-lg-4 control-label'))  }}                  
			<div class="col-lg-6">
			{{	Form::text('current_password','', array('class' => 'form-control'))  }}                     
			<div class="inline-warning">{{ $errors->first('current password') }}</div>			
			</div>	
	  </div>
	  
	  <div class="form-group">
			{{	Form::label('new_password','New Password', array('class' => 'col-lg-4 control-label'))  }}                  
			<div class="col-lg-6">
			{{	Form::text('new_password','', array('class' => 'form-control'))  }}                     
			<div class="inline-warning">{{ $errors->first('new password') }}</div>			
			</div>	
	  </div>

	  <div class="form-group">
			{{	Form::label('new_password2','Confirm New Password', array('class' => 'col-lg-4 control-label'))  }}                  
			<div class="col-lg-6">
			{{	Form::text('new_password2','', array('class' => 'form-control'))  }}                     
			<div class="inline-warning">{{ $errors->first('confirmed new password') }}</div>			
			</div>	
	  </div>

	  <div class="form-group">
			<div class="col-lg-offset-4  col-lg-6">
			{{	Form::submit('Change', array('class' => 'btn btn-primary btn-lg'))  }}                     
			</div>
	  </div>
	  {{	Form::close()   }}	
    </div>  
@stop











