<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('customer_name');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->date('reservation_date');
        $table->time('reservation_time');
        $table->integer('number_of_people');
        $table->text('note')->nullable();
        $table->string('status')->default('pending');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};