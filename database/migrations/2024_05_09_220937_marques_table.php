<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('marques', function (Blueprint $table) {
            $table->id();
            $table->string('marque', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marques');
    }
};
