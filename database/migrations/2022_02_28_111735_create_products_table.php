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
            $table->string('generic_Name');
            $table->string('form');
            $table->string('restriction_Formula');
            $table->string('description');
            $table->string('img');
            $table->double('price',12,2);
            $table->integer('faskes_TK1');
            $table->integer('faskes_TK2');
            $table->integer('faskes_TK3');
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
