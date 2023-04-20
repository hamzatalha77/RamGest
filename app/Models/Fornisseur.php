<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornisseur extends Model
{
    use HasFactory;
    protected $primaryKey = 'fornisseur_name';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fornisseur_name',
        'description',
    ];

    public function stocks(){
        return $this->hasMany(Stock::class);
    }
}
