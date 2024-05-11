<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('details_commande', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            $table->double('quantite', 10, 2);
            $table->double('prix_ht', 10, 2);
            $table->double('tva', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('details_commande');
    }
};
