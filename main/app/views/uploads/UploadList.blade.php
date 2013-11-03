@extends('layouts.master')
@section('content')

	<div>	
		<h3 >Document List</h3>	
		<table  id="datatables" class="display" >
			<thead>
				<tr>
					<th>Date</th>
					<th>Document</th>
					<th>File Name</th>
					<th>Comment</th>
					<th style="width: 10px">Created at</th>
					<th></th>		
				  @if ( Auth::check() )			
					<th></th>		
				  @endif
				</tr>
			</thead>
			<tbody>				
				@foreach($uploads as $upload)		
				<tr>
					<td>{{ date("d-M-Y",strtotime($upload->docDate)) }}</td>
					<td>{{  $upload->docTitle  }} </td>
					<td>{{  $upload->docFilename  }}	</td>			
					<td>{{  $upload->comment  }} </td>
					<td>{{  date("d/M/Y h:i A",strtotime($upload->created_at))  }} </td>
					<td>{{  HTML::link( "uploaded_files/".$upload->id."/".$upload->docFilename, 'View', array('class'=>'link_view'));  }}  </td>
				    @if ( Auth::check() )			
					<td>{{  HTML::linkRoute('upload_remove', 'Remove', array('upload_id'=>$upload->id), array('class'=>'link_remove'));  }}  </td>
				    @endif
					
				</tr>			
				@endforeach				
			</tbody>
		</table>
	</div>
@stop

