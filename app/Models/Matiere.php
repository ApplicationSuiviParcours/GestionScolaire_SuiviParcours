<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Classe;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable = ['libelle','coefficient'];

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(
            Classe::class,
            'enseignant_matiere_classe'
        );
    }
}
