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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('cover');
            $table->float('prix');
            $table->string('destination');
            $table->string('presonel');
            $table->string('itineraire');
            $table->enum('statut', ['en_traitement', 'disponible', 'indisponible']);
            $table->date('date_depart');
            $table->date('date_retour');
            $table->json('les_images');
            $table->foreignId('activite_id')->constrained('activites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
