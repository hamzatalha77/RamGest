<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $primaryKey = 'reference';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'reference',
        'categorie_name',
        'fornisseur_name',
        'quantite',
        'prix',
    ];

    public function entrees(){

        return $this->hasMany(Entree::class);
    }
    public function sorties(){

        return $this->hasMany(Sortie::class);
    }
    public function fornisseur(){

        return $this->belongsTo(Fornisseur::class);
    }
    public function categorie(){

        return $this->belongsTo(Categorie::class);
    }
}
