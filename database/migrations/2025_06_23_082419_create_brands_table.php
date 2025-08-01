<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')->on('categories')
                    ->onDelete('cascade');
            $table->string('brand_name');
            $table->string('slug'); 
            $table->string('image')->nullable();
            $table->double('price');
            $table->longText('description')->nullable();
            $table->string('status')->default('Available');
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
        Schema::dropIfExists('brands');
    }
};
