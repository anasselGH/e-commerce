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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nom');
            $table->bigInteger('prenom');
            $table->bigInteger('adrese');
            $table->bigInteger('ville');
            $table->bigInteger('email');
            $table->bigInteger('password');
            $table->bigInteger('tel');
            $table->bigInteger('isAdmin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
