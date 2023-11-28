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
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->string('load_weight');
            $table->string('load_length');
            $table->string('load_rate');
            $table->string('load_distance');
            $table->string('load_type');
            $table->string('payment_type');
            $table->string('load_id');
            $table->text('comment');
            $table->string('shipper');
            $table->dateTime('pickup_date');
            $table->text('pickup_address');
            $table->string('pickup_phone');
            $table->string('person_at_pickup');
            $table->text('pickup_instructions');
            $table->string('cosignee');
            $table->dateTime('dropoff_date');
            $table->text('dropoff_address');
            $table->string('delivery_phone');
            $table->string('person_at_dropoff');
            $table->text('dropoff_instructions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loads');
    }
};
