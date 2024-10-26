<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compte extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }
}
