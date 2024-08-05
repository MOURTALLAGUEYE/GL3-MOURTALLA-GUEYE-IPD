<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentresVotesTable extends Migration
{
    public function up()
    {
        Schema::create('centres_votes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('commune_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('centres_votes');
    }
}