<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBureauxVotesTable extends Migration
{
    public function up()
    {
        Schema::create('bureaux_votes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('centre_vote_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bureaux_votes');
    }
}