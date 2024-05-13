<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    protected $fillable = ['codebarre', 'designation', 'prix_ht', 'tva', 'description', 'image', 'sous_famille_id', 'marque_id', 'unite_id'];

    public function detailsCommandes()
    {
        return $this->hasMany(DetailsCommande::class);
    }

    public function sousFamille()
    {
        return $this->belongsTo(sousFamilles::class, 'sous_famille_id');
    }

    public function marque()
    {
        return $this->belongsTo(marques::class, 'marque_id');
    }

    public function unite()
    {
        return $this->belongsTo(unites::class, 'unite_id');
    }
}
