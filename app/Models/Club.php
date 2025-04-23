<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'image'];
<<<<<<< HEAD
<<<<<<< HEAD

    public function membres()
    {
        return $this->belongsToMany(Membre::class, 'club_membre', 'club_id', 'membre_id');
=======
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
>>>>>>> imadV
=======
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
>>>>>>> imadV
    }
}
