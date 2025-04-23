<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 
        'description', 
        'date_debut', 
        'date_fin',
        'image', 
        'club_id'
    ];
    
    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}