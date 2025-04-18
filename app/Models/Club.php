<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'image'];

    public function membres()
    {
        return $this->belongsToMany(Membre::class, 'club_membre', 'club_id', 'membre_id');
    }
}
