@extends('layouts.master')
@section('content')

	<div>		
		<h3 >Upload Document</h3>
		
		{{	Form::open( array( 'url' =>'upload_save',  'class' => 'form-horizontal' , 'files' => true) )	}}   	

	  <div class="form-group">
			{{	Form::label('doc_date','Document Date', array('class' => 'col-lg-2 control-label'))  }}                     
			<div class="col-lg-10">
			{{	Form::text('doc_date','', array('class' => 'form-control' , 'id' => 'datepicker'))  }}   
			<div class="inline-warning">{{ $errors->first('docDate') }}</div>	
			</div>	
	  </div>  
	  
	  <div class="form-group">
			{{	Form::label('doc_title','Document Title', array('class' => 'col-lg-2 control-label'))  }}                  
			<div class="col-lg-10">
			{{	Form::text('doc_title','', array('class' => 'form-control'))  }}                     
			<div class="inline-warning">{{ $errors->first('docTitle') }}</div>			
			</div>	
	  </div>
	  
	  <div class="form-group">
			{{	Form::label('doc_filename','File', array('class' => 'col-lg-2 control-label'))  }}      
			<div class="col-lg-10">
				<div class="input-group">
					<span class="input-group-btn" >
						<span class="btn btn-info btn-file" >
							Browse<input type="file" name="doc_filename" id="doc_filename">
						</span>
					</span>
					<input class="form-control" id="selected_file" readOnly="" type="text" >
				</div>
				<div class="inline-warning">{{ $errors->first('docFilename') }}	</div>	
			</div>
	  </div>
	  
	  <div class="form-group">
			{{	Form::label('comment','Comment', array('class' => 'col-lg-2 control-label'))  }} 
			<div class="col-lg-10">				
			{{	Form::textarea('comment','', array('class' => 'form-control', 'rows'=>3))  }}                     
			</div>	
	  </div>

	  <div class="form-group">
			<div class="col-lg-offset-2 col-lg-2">
			{{	Form::submit('Save', array('class' => 'btn btn-primary btn-lg  btn-block'))  }}                     
			</div>
	  </div>
	  {{	Form::close()   }}	
    </div>  
@stop











