<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->dateTime('bday_tfd');
			$table->string('category');
			$table->string('style');
			$table->text('description');
			$table->string('fabric');
			$table->text('image');
			$table->String('color');
			$table->integer('quantity');
			$table->text('remark');
			$table->string('factory_name');
			$table->string('company_name');
			$table->string('steps');
			$table->dateTime('bday_dd');
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
        Schema::dropIfExists('products');
    }
}
