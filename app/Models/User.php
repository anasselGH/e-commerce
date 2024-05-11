<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'adresse', 'ville', 'email', 'password', 'tel', 'isAdmin'];

    public function commandes(){
        return $this->hasMany(Commandes::class);
    }
}
