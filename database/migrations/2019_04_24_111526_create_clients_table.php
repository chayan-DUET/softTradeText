<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('full_name');
			$table->string('address');
			$table->string('phone');
			$table->string('email')->unique();
			$table->text('image');
			$table->string('company_name');
			$table->string('quantity');
			$table->tinyInteger('status');
			 $table->string('password');
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
        Schema::dropIfExists('clients');
    }
}
