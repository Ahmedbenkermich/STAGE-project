<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cheque extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }
}
