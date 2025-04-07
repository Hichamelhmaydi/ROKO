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
            $table->foreignId('voyage_id')->constrained('voyages');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('statut',['en attente','en cours','accepté','refusé'])->default('en attente');
            $table->dateTime('date_reservation');
            $table->float('prix_total');
            $table->string('notes');
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
