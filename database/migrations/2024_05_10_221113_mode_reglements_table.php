<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mode_reglements', function (Blueprint $table) {
            $table->id();
            $table->string('mode_reglements', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mode_reglements');
    }
};
