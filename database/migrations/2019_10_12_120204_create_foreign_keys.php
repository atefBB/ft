<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('family', function(Blueprint $table) {
		        $table->unsignedBigInteger('father_id');
			$table->foreign('father_id')->references('id')->on('persons');
		});

		Schema::table('family', function(Blueprint $table) {
			$table->unsignedBigInteger("mother_id");
			$table->foreign('mother_id')->references('id')->on('persons');
		});
	}

	public function down()
	{
		Schema::table('family', function(Blueprint $table) {
			$table->dropForeign('family_father_id_foreign');
		});

		Schema::table('family', function(Blueprint $table) {
			$table->dropForeign('family_mother_id_foreign');
		});
	}
}
