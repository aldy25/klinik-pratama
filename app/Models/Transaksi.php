<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Diagnosa;
use App\Models\Layanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function diagnosa()
    {
        return $this->hasOne(Diagnosa::class);
    }
}
