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
        Schema::create('humas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agenda_id')->constrained('agendas');
            $table->string('deskripsi')->nullable();
            $table->string('tautan')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('humas');
    }
};
