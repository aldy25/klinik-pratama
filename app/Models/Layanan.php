<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
