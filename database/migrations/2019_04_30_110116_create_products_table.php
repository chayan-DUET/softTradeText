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
			$table->dateTime('will_send_date_strike');
			$table->dateTime('will_send_date_size');
			$table->dateTime('will_send_date_pp');
			$table->dateTime('will_send_date_ps');
			$table->dateTime('Sent_date');
			$table->dateTime('Sent_date_strike');
			$table->dateTime('Sent_date_size');
			$table->dateTime('Sent_date_pp');
			$table->dateTime('Sent_date_ps');
			$table->string('will_comment');
			$table->string('will_comment_strike');
			$table->string('will_comment_size');
			$table->string('will_comment_pp');
			$table->string('will_comment_ps');
			$table->dateTime('revised_date');
			$table->dateTime('revised_date_strike');
			$table->dateTime('revised_date_size');
			$table->dateTime('revised_date_pp');
			$table->dateTime('revised_date_ps');
			$table->dateTime('revised_sent_date');
			$table->dateTime('revised_sent_date_strike');
			$table->dateTime('revised_sent_date_size');
			$table->dateTime('revised_sent_date_pp');
			$table->dateTime('revised_sent_date_ps');
			$table->string('revised_comment');
			$table->string('revised_comment_strike');
			$table->string('revised_comment_size');
			$table->string('revised_comment_pp');
			$table->string('revised_comment_ps');
			$table->integer('in_progress');
			$table->integer('done_qty');
			$table->integer('balance_qty');
			$table->integer('in_progressknit');
			$table->integer('done_qtyknit');
			$table->integer('balance_qtyknit');
			$table->integer('in_progressfabric');
			$table->integer('done_qtyfabric');
			$table->integer('balance_qtyfabric');
			$table->integer('in_progressdyeing');
			$table->integer('done_qtydyeing');
			$table->integer('balance_qtydyeing');
			$table->integer('in_progresscutting');
			$table->integer('done_qtycutting');
			$table->integer('balance_qtycutting');
			$table->integer('in_progressprint');
			$table->integer('done_qtyprint');
			$table->integer('balance_qtyprint');
			$table->integer('in_progressembo');
			$table->integer('done_qtyembo');
			$table->integer('balance_qtyembo');
			$table->integer('in_progresssewing');
			$table->integer('done_qtysewing');
			$table->integer('balance_qtysewing');
			$table->integer('in_progresswash');
			$table->integer('done_qtywash');
			$table->integer('balance_qtywash');
			$table->integer('in_progresspack');
			$table->integer('done_qtypack');
			$table->integer('balance_qtypack');
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
