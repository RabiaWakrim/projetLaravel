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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->date('date_prise_fonction');
            $table->string('indice_enseignant',255);
            $table->integer('departement_enseigner');
            $table->integer('departement_chef');
            $table->foreign('departement_enseigner')->references('id')->on('departements');
            $table->foreign('departement_chef')->references('id')->on('departements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
