<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    public function diagnosa()
    {
        return $this->hasOne(Diagnosa::class);
    }
}
