<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsClickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_click', function (Blueprint $table) {
            $table->id();
						$table->string('phone')->nullable();
						$table->integer('click_trans_id');
						$table->integer('amount');
						$table->integer('click_paydoc_id');
						$table->integer('service_id');
						$table->string('sign_time')->nullable();
						$table->string('error_note')->nullable();
						$table->integer('status');
						$table->integer('create_time');
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
        Schema::dropIfExists('transactions_click');
    }
}
