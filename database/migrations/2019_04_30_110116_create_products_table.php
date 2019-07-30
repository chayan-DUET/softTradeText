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
			$table->string('company_name1');
			$table->string('season');
			$table->string('comp_sname');
			$table->string('update_order');
			$table->string('steps');
			$table->string('running_steps');
			$table->dateTime('will_send_date');
			$table->dateTime('Sent_date');
			$table->string('will_comment');
			$table->dateTime('revised_date');
			$table->dateTime('revised_sent_date');
			$table->string('revised_comment');
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
