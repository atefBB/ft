<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamilyTable extends Migration {

	public function up()
	{
		Schema::create('family', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('family');
	}
}
