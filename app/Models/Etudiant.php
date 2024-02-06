<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nometudiant','imageetudiant'
        ];

public function niveauscolaires()
{
return $this->hasMany(NiveauScolaire::class ,"etudiantID");
}
}
