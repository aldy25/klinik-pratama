<?php

namespace App\Models;

use App\Models\Resep;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
