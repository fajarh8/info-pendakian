<?php

use App\Models\Mountain;
use App\Models\Trail;
use App\Models\User;
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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'leader')->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->foreignIdFor(Trail::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->datetimes('date');
            $table->integer('number_of_people');
            $table->enum('status', ['pending', 'approved', 'rejected', 'cancelled'])->default('pending');
            $table->integer('total_price');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->string('payment_method');
            $table->longText('notes');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
