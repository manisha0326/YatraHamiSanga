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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            
            $table->unsignedBigInteger('vehicleType'); // FK to categories
            $table->unsignedBigInteger('vehicleModel'); // FK to brands
            
            $table->enum('bookingType', ['perDay', 'perHour']);
            
            $table->date('pickupDate')->nullable();
            $table->date('returnDate')->nullable();
            $table->integer('hour')->nullable();
            
            $table->double('amount', 10, 2);

            $table->enum('status', ['available', 'booked','cancelled'])->default('available');
            $table->unsignedBigInteger('payment_id')->nullable(); // FK to payments table
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->timestamps();

            // Foreign Keys
            $table->foreign('vehicleType')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('vehicleModel')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
