<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'client';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'client',
        'nom',
        'prenom',
        'adresse',
    ];
    public function sorties(){

        return $this->hasMany(Sortie::class);
    }
}
