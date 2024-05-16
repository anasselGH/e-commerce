<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Detailcommande extends Model
{
    use HasFactory;
    protected $table = 'details_commande';


    protected $fillable = ['commande_id', 'produit_id', 'quantite', 'prix_ht', 'tva'];



    public function commandes(){
        $this->belongsTo(commandes::class);
    }


    public function produits(){
        $this->belongsTo(produits::class);
    }
}
