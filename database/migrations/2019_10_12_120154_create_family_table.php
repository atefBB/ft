<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamilyTable extends Migration {

	public function up()
	{
		Schema::create('family', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('father_id')->unsigned();
			$table->integer('mother_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('family');
	}
}