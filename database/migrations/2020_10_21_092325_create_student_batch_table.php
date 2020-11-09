<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentbatchTable extends Migration {

	public function up()
	{
		Schema::create('student_batch', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('is_active');
			$table->timestamps();
			$table->integer('batch_id');
			$table->integer('student_id');
		});
	}

	public function down()
	{
		Schema::drop('student_batch');
	}
}