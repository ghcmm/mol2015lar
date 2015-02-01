<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCategoriesToken extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{   
            Schema::table('service_categories',function(Blueprint $table)
            {
               $table->rememberToken();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::table('services',function(Blueprint $table)
            {
                $table->dropRememberToken();
            });
	}

}