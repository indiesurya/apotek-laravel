<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
    public function obat()
    {
        return $this->hasMany(obat::class);
    }  
}
