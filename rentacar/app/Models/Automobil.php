<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'marka',
    ];


    public function iznajmljivanjes()
    {
        return $this->hasMany(Iznajmljivanje::class);
    }
}
