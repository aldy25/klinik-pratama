<?php

namespace App\Models;

use App\Models\Diagnosa;
use App\Models\Lab;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;

    // protected $fillable = ['nik','nama','alamat','tgl_lahir','no_telp'];
    protected $guarded = ['id'];

    public function diagnosa()
    {
        return $this->hasMany(Diagnosa::class);
    }
    public function lab()
    {
        return $this->hasMany(Lab::class);
    }
}
