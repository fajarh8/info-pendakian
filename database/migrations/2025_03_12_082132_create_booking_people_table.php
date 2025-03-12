<?php

use App\Models\Booking;
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
        Schema::create('booking_people', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Booking::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->string('name')->index();
            $table->string('phone')->index();
            $table->string('address')->index();
            $table->string('identity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_people');
    }
};
