<?php

use App\Models\Mountain;
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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->foreignIdFor(Mountain::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->string('location')->index();
            $table->string('contact')->index();
            $table->longText('description');
            $table->string('photo')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
