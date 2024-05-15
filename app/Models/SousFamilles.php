<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sousFamilles extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'image', 'famille_id'];


    public function familles()
    {
        return $this->belongsTo(Familles::class);
    }

    public function produits()
    {
        return $this->hasMany(Produits::class);
    }
}
