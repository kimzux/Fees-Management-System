<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->timestamps();
			$table->string('registration_number', 100)->unique();;
			$table->string('name', 100);
			$table->string('parent_name', 100);
			$table->date('date_of_birth');
			$table->date('date_of_joining');
			$table->string('email', 100);
			$table->string('phone_number', 100);
			$table->string('address', 100);
			$table->string('image')->nullable();
			$table->string('gender', 50);
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}