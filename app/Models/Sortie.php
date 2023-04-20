<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'categorie',
        'fornisseur',
        'client',
        'prix',
        'quantite',
        'total',
    ];

    public function stock(){

        return $this->belongsTo(Stock::class);
    }
    public function client(){

        return $this->belongsTo(Client::class);
    }
}
