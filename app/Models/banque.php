<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banque extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function cheques()
    {
        return $this->hasMany(Cheque::class);
    }

    public function comptes()
    {
        return $this->hasMany(Compte::class);
    }
}

