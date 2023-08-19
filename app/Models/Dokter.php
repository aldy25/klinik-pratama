<?php

namespace App\Models;

use App\Models\User;
use App\Models\Diagnosa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function diagnosa()
    {
        return $this->hasMany(Diagnosa::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
