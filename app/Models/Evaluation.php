<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Note;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_evaluation','date_evaluation',
        'classe_id','matiere_id','annee_id'
    ];

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

}
