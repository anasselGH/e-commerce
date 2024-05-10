<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;

    protected $fillable = ['codebarre', 'designation', 'prix_ht', 'tva', 'description', 'image', 'sous_famille_id', 'marque_id', 'unite_id'];

    public function detailsCommandes(){
        $this->hasMay(detailsCommandes::class);
    }


    public function sousFamilles(){
        $this->belongsTo(sousFamilles::class);
    }


    public function marques(){
        $this->belongsTo(marques::class);
    }



    public function unites(){
        $this->belongsTo(unites::class);
    }
}
