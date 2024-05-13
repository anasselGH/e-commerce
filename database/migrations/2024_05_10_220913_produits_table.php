<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('codebarre');
            $table->double('prix_ht', 10, 2);
            $table->double('tva', 10, 2);
            $table->text('designation');
            $table->text('description');
            $table->string('image', 200);
            $table->unsignedBigInteger('sous_famille_id');
            $table->unsignedBigInteger('marque_id');
            $table->unsignedBigInteger('unite_id');
            $table->foreign('sous_famille_id')->references('id')->on('sous_familles')->onDelete('cascade');
            $table->foreign('marque_id')->references('id')->on('marques')->onDelete('cascade');
            $table->foreign('unite_id')->references('id')->on('unites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
