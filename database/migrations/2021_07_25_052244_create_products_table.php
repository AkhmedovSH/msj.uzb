<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
						$table->string('name');
						$table->integer('category_id')->nullable()->unsigned();
						$table->integer('brand_id')->nullable()->unsigned();
						$table->double('price', 8,0)->default(0);
						$table->string('image')->nullable();
						$table->text('images')->nullable();
						$table->text('sizes')->nullable();
						$table->text('description')->nullable();
						$table->text('characteristics')->nullable();
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
