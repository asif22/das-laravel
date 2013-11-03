<?php

use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function($table)
		{
			$table->increments('documentId');
			$table->string('documentPath');
			$table->string('documentName');
			$table->timestamps();
			$table->integer('RefUploadId');
			//$table->foreign('RefUploadId')->references('uploadId')->on('uploads');   ---------------------migration unsuccessful.... generating errors during migration.
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('documents');
	}

}