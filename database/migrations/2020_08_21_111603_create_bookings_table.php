<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('phone_no');
            $table->string('seat');
            $table->integer('amount');
            $table->date('payment_date');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('schedule_id');
            $table->timestamps();

            $table->foreign('schedule_id')
                ->references('id')
                ->on('schedule')
                ->onDelete('cascade');
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
}
