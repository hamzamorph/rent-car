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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->String('marque');
            $table->String('modele');
            $table->String('type');
            $table->String('prix_jour');
            $table->boolean('dispo')->default(0);
            $table->String('image')->default(("https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0"));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
