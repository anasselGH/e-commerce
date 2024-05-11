<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('etats', function (Blueprint $table) {
            $table->id();
            $table->string('etat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etats');
    }
};
