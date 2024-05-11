<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('unites', function (Blueprint $table) {
            $table->id();
            $table->string('unite', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unites');
    }
};
