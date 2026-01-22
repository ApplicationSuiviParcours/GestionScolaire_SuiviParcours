<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\ParentEleve;
use App\Models\Inscription;
use App\Models\Note;
use App\Models\Absence;

class Eleve extends Model
{
    use HasFactory;

     protected $fillable = [
        'matricule','nom','prenom','genre','date_naissance',
        'lieu_naissance','adresse','telephone','email','photo','statut'
    ];

    public function inscriptions(): HasMany
    {
        return $this->hasMany(Inscription::class);
    }

    public function parents(): BelongsToMany
    {
        return $this->belongsToMany(
            ParentEleve::class,
            'eleve_parent'
        )->withPivot('lien')->withTimestamps();
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}
