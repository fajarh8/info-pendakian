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
        Schema::create('trails', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Mountain::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->index();
            $table->string('name')->index();
            $table->integer('length')->index();
            $table->integer('average_time')->index();
            $table->float('average_difficulty')->index();
            $table->string('best_season')->index();
            $table->longText('description');
            $table->string('photo')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trails');
    }
};
