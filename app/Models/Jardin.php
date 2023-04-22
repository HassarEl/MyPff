<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'NumJ',
        'nomJardin',
        'adresse',
        'ville',
        'image',
        'superficie',
    ];
    public function user()
    {
        return $this->belongsTo(Usser::class);
    }
}
