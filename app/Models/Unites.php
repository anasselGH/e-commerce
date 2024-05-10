<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unites extends Model
{
    use HasFactory;

    protected $fillable = ['unite'];


    public function produits(){
        $this->hasMany(produits::class);
    }
}
