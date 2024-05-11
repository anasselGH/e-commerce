<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sous_familles', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 200);
            $table->string('image', 200);
            $table->unsignedBigInteger('famille_id');
            $table->foreign('famille_id')->references('id')->on('familles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sous_familles');
    }
};
