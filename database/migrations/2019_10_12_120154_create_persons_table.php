<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonsTable extends Migration {

	public function up()
	{
		Schema::create('persons', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('firstname');
			$table->string('lastname');
			$table->datetime('birth_date');
		});
	}

	public function down()
	{
		Schema::drop('persons');
	}
}
