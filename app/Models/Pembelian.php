<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
    public function distributor()
    {
        return $this->hasMany(Distributor::class);
    }    
}
