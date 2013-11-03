<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UploadController@showUploadList');

// Authentication
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

Route::get('upload_list', array('as'=>'upload_list' , 'uses'=>'UploadController@showUploadList' ) );       
Route::get('upload_new', array('as'=>'upload_new' , 'uses'=>'UploadController@showNewUploadForm' ) );       
Route::post('upload_save', array('as'=>'upload_save' , 'uses'=>'UploadController@saveSubmittedUploadForm' ) );       
Route::get('upload_remove', array('as'=>'upload_remove' , 'uses'=>'UploadController@removeUpload' ) );  

Route::get('change_password_form', array('as'=>'change_password_form' , 'uses'=>'AuthController@showChangePasswordForm' ) );      
Route::post('change_password', array('as'=>'change_password' , 'uses'=>'AuthController@changePassword' ) );       
