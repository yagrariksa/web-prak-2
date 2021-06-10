<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_biaya', 'total_barang'];

    public function barang()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
