<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('thumbnail');                      
            $table->float('price');           
            $table->integer('buys')->default(0);
            $table->integer('discount')->default(0);
            $table->text('description')->nullable();           
            $table->boolean('is_active');
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
        Schema::dropIfExists('coffee');
    }
}
