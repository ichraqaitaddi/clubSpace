<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'image'];
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}
