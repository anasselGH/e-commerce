<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Etats extends Model
{
    use HasFactory;

    protected $fillable = ['etat'];


    public function commandes(){
        $this->hasMany(commandes::class);
    }
}
