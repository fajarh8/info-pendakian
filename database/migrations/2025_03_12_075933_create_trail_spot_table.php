<?php

use App\Models\Spot;
use App\Models\Trail;
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
        Schema::create('trail_spot', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Trail::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->foreignIdFor(Spot::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trail_spot');
    }
};
