<?php

namespace App\Models;

use App\Models\Obat;
use App\Models\Diagnosa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resep extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }

    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class);
    }
}
