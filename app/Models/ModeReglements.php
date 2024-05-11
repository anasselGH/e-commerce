<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeReglements extends Model
{
    use HasFactory;


    protected $fillable = ['mode_reglements'];


    public function commandes(){
        $this->hasMany(commandes::class);
    }
}
