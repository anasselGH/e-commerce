<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marques extends Model
{
    use HasFactory;

    protected $fillable = ['marque'];


    public function produits(){
        $this->hasMnay(produits::class);
    }
}
