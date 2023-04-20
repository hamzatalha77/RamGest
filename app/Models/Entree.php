<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'categorie',
        'fornisseur',
        'prix',
        'quantite',
        'total',
    ];

    public function stock(){

        return $this->belongsTo(Stock::class);
    }
}
