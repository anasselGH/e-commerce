<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familles extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'image'];
    public function getImageAttribute($value)
    {
        return $value ?: 'images/default.jpg';
    }
}
