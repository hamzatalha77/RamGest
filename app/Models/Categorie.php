<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $primaryKey = 'categorie_name';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'categorie_name',
        'description',
    ];

    public function stocks(){
        return $this->hasMany(Stock::class);
    }
}
