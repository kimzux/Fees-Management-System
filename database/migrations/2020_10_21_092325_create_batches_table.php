<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBatchesTable extends Migration {

	public function up()
	{
		Schema::create('batches', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('student_id');
			$table->timestamps();
			$table->string('batch_name');
			$table->string('education_level', 100);
		});
	}

	public function down()
	{
		Schema::drop('batches');
	}
}