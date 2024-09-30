<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Utilisateur qui laisse l'avis
            $table->foreignId('agency_id')->constrained()->onDelete('cascade'); // Agence évaluée
            $table->tinyInteger('rating')->unsigned(); // Note sur 5
            $table->text('comment')->nullable(); // Commentaire de l'utilisateur
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}