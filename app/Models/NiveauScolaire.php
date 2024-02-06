<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauScolaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomsetudiant','imagesetudiant','etudiantID'
        ];

  public function etudiants()
 {
   return $this->belongsTo(Etudiant::class,"etudiantID");
  }
}
