<?php

namespace App\Models;

use App\Models\Resep;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnosa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function resep()
    {
        return $this->hasMany(Resep::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

}
