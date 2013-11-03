<?php

use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uploads', function($table)
		{
			$table->increments('id');
			$table->date('docDate');
			$table->string('docTitle');			
			$table->string('docFilename');			
			$table->string('comment');
			$table->string('userId');
			$table->timestamps();				
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('uploads');
	}

}