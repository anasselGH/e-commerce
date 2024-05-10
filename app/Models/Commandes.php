<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'heure', 'regle', 'mode_reglement_id', 'etat_id', 'user_id'];


    public function users(){
        return 
            $this->belongsTo(users::class);
    }


    public function modeReglements(){
        $this->belongsTo(modeReglements::class);
    }


    public function etats(){
        $this->belognsTo(etats::class);
    }


    public function detailsCommande(){
        $this->hasMany(detailsCommandes::class);
    }
}
