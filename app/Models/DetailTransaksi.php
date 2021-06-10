<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'img', 'price', 'transaksi_id', 'token'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
