<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sousFamilles extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'image', 'famille_id'];


    public function familles(){
        $this->belongsTo(familles::class);
    }


    public function produits(){
        $this->hasMany(produits::class);
    }
}
