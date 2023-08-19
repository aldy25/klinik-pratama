<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateDiagnosaRequest;
use Auth;

class PemeriksaanController extends Controller
{
    public function index(){
        
        $this->authorize('admin');
        $dokter = Dokter::where('user_id',auth()->user()->id)->get()->first();

        return view('pengobatan.pengobatan',[
            'title' => 'Pengobatan',
            'pasien' => Pasien::all(),
            'dokter' => Dokter::all(),
            'obat' => Obat::all(),
            'layanan' => Layanan::all()
        ]);
    }

    public function update(UpdateDiagnosaRequest $request, $id)
    {
       return $request;
    }

}
