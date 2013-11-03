 <?php

class UploadController extends BaseController {

	public function showUploadList()
	{
		return View::make('uploads/UploadList')
							->with('uploads', Upload::all() );                      // ->paginate(2)
	}

	public function showNewUploadForm()
	{
		return View::make('uploads/NewUploadForm');
	}

	public function saveSubmittedUploadForm()
	{				
		$submitted_data = array(
			'docDate' => Input::get('doc_date'),
		//	'docTitle' => Input::get('doc_title'),
			'docFilename' => Input::file('doc_filename')                    
		);		
		
		$validation = Upload::validate($submitted_data);
		
		if ($validation -> fails()) {
			return Redirect::route('upload_new')->withErrors($validation)->withInput(Input::except('docFilename') );			
		}
		else 	{
	
			if (Input::hasFile('doc_filename'))
			{								
				$formattedDate = Custom::changeDateFormat(Input::get('doc_date'));
			
				$filename = Input::file('doc_filename')->getClientOriginalName();
				$userid = Auth::user()->id;
				
				$id = Upload::create(array(		
					'docDate'   =>  $formattedDate,
					'docTitle'   =>  Input::get('doc_title'),
					'docFilename'   => $filename,	
					'comment'  => Input::get('comment'), 			
					'userId'       =>  $userid
				))->id;
				
				Input::file('doc_filename')->move('uploaded_files/'.$id."/", $filename);
				return Redirect::route('upload_new')->with('message', 'Document uploaded successfully.');							
			}		
			else {
				return Redirect::route('upload_new')->with('message', 'Document could not be uploaded.')->withInput(Input::except('docFilename') );			
			}			
		}	
	}
	
	public function removeUpload()
	{				
		$target_upload_id = Input::get('upload_id');

		$folder_path = public_path().'/'.'uploaded_files' .'/' .$target_upload_id;

		if (is_dir($folder_path)) {		
		
			Custom::rmdir_recursive($folder_path);

		}
		
		Upload::destroy($target_upload_id);				
		return Redirect::route('upload_list')->with('message', 'Document removed successfully.');									
	}
		
}

