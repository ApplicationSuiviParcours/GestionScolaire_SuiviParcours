<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Inscription;
use App\Models\Eleve;

class Classe extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom_classe','niveau','filiere','effectif_max'
    ];

    public function inscriptions(): HasMany
    {
        return $this->hasMany(Inscription::class);
    }

    public function eleves(): HasManyThrough
    {
        return $this->hasManyThrough(
            Eleve::class,
            Inscription::class
        );
    }
}
