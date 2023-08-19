<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Apoteker;
use App\Models\Obat;
use App\Models\Inventaris;
use App\Models\Transaksi;
use App\Models\TenagaKesehatan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('owner');
        return view('laporan.index',[
            'title' => 'Laporan'
        ]);
    }

    public function cetakPasien()
    {
        $this->authorize('owner');
        return view('laporan.cetak_pasien',[
            'title' => 'Laporan',
            'data' => Pasien::all()
        ]);
    }

    public function cetakDokter()
    {
        $this->authorize('owner');
        return view('laporan.cetak_dokter',[
            'title' => 'Laporan',
            'data' => Dokter::all()
        ]);
    }

    public function cetakApoteker()
    {
        $this->authorize('owner');
        return view('laporan.cetak_apoteker',[
            'title' => 'Laporan',
            'data' => Apoteker::all()
        ]);
    }

    public function cetakAdmin()
    {
        $this->authorize('owner');
        return view('laporan.cetak_admin',[
            'title' => 'Laporan',
            'data' => Admin::all()
        ]);
    }
    public function cetakTenagaKesehatan()
    {
        $this->authorize('owner');
        return view('laporan.cetak_nakes',[
            'title' => 'Laporan',
            'data' => TenagaKesehatan::all()
        ]);
    }

    public function cetakObatHabis()
    {
        $this->authorize('owner');
        return view('laporan.cetak_obat_habis',[
            'title' => 'Laporan',
            'data' => Obat::where('stok','<',10)->get()->all()
        ]);
    }

    public function cetakInventaris()
    {
        $this->authorize('owner');
        return view('laporan.cetak_inventaris_rusak',[
            'title' => 'Laporan',
            'data' => Inventaris::where('kondisi','Rusak')->get()->all()
        ]);
    }

    public function pilih(){
        $this->authorize('owner');
        return view('laporan.pilih_bulan',
        [
            'title' => 'Laporan'
        ]);
    }

    public function cetakTransaksi(){
        $data = $_POST;
        if ($data['bulan']=='Semua') {
           $transaksi = Transaksi::where('jml_bayar','!=',0)->get()->all(); 
        }else {
            $transaksi = Transaksi::whereMonth('created_at',$data['bulan'])
                ->where('jml_bayar','!=',0)->get()->all();    
        }
        
        return view('laporan.cetak_transaksi',[
            'title' => 'Laporan',
            'data' => $transaksi
        ]);
    }
}
