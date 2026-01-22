<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Eleve;

class ParentEleve extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $fillable = [
        'nom','prenom','telephone','email','adresse'
    ];

    public function eleves(): BelongsToMany
    {
        return $this->belongsToMany(
            Eleve::class,
            'eleve_parent'
        )->withPivot('lien')->withTimestamps();
    }
}
