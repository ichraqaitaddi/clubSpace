<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','email'];

    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'club_membre', 'membre_id', 'club_id');
    }
}
