<!DOCTYPE html>
<html lang="en">
  <head>  
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		
		<title>Document Archival System</title>		
		<link rel="shortcut icon" href="favicon.png">		
		
		<link rel="stylesheet" href="css/style.min.css"/>
		

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="../../assets/js/html5shiv.js"></script>
		  <script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.min.js"></script>
		<script src="js/dataTables.min.js"></script>
		
  </head>

  <body>

    <div class="container">
	
      <div class="header">
	  
		 <div class="masthead">				
				<h3 class="text-muted"><img src="{{ asset('image/logo.png') }}" alt="Company Logo" /><span>MAS Intimates Bangladesh (Pvt.) Ltd.</span></h3>
		 </div>

			  
		  <div class="navbar navbar-inverse">
			<div class="container">
			  <div class="navbar-header">			  
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			  </div>
			  
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				  <li>{{  link_to_route('upload_list', 'Home') }} </li>
				  @if ( Auth::guest() )
				  <li>{{ HTML::link('login', 'Login') }}</li>
				  @else
				  <li>{{  link_to_route('upload_new', 'Upload Document') }} </li>
				  <li>{{  link_to_route('change_password_form', 'Change Password') }} </li>
				  <li>{{ HTML::link('logout', 'Logout') }}</li>
				  @endif
				</ul>
			  </div><!--/.nav-collapse -->			  
			</div>
		  </div>
		  
      </div>

		<!-- Messages -->
		@if ($message = Session::get('message'))
		<div class="alert-success" id="message-box">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{{{ $message }}}
		</div>
		@endif	  

		<div class="main">	 		
			@yield('content')			
		</div>

		<div class="footer">
		  <p>MAS BD Information Technology Services</p>
		</div>

    </div> <!-- /container -->
	<script>
	
	$(document).ready( function() {
		$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			$('#selected_file').val(label);
		});		
		
		var oTable = $('#datatables').dataTable( {		
			"sScrollX": "100%",
			"sScrollXInner": "100%",
			"bScrollCollapse": true,
			"bPaginate": true
		} );
		
	});		
	
	$(document)
		.on('change', '.btn-file :file', function() {
			var input = $(this),
				numFiles = input.get(0).files ? input.get(0).files.length : 1,
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
				input.trigger('fileselect', [numFiles, label]);
	});

	</script>	
  </body>
</html>
		
		
