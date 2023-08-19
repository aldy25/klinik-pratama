<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Transaksi;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Inventaris;
use App\Models\Apoteker;
use App\Models\TenagaKesehatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_user = [
            'Admin' => count(Admin::all()),
            'Dokter' => count(Dokter::all()),
            'Apoteker' => count(Apoteker::all()),
            'Nakes' => count(TenagaKesehatan::all()),
        ];
        $jan = count(Transaksi::whereMonth('created_at','1')->get()->all());
        $feb = count(Transaksi::whereMonth('created_at','2')->get()->all());
        $mar = count(Transaksi::whereMonth('created_at','3')->get()->all());
        $apr = count(Transaksi::whereMonth('created_at','4')->get()->all());
        $mei = count(Transaksi::whereMonth('created_at','5')->get()->all());
        $jun = count(Transaksi::whereMonth('created_at','6')->get()->all());
        $jul = count(Transaksi::whereMonth('created_at','7')->get()->all());
        $agu = count(Transaksi::whereMonth('created_at','8')->get()->all());
        $sep = count(Transaksi::whereMonth('created_at','9')->get()->all());
        $okt = count(Transaksi::whereMonth('created_at','10')->get()->all());
        $nov = count(Transaksi::whereMonth('created_at','11')->get()->all());
        $des = count(Transaksi::whereMonth('created_at','12')->get()->all());

        return view('dashboard',[
            'title' => 'Dashboard',
            'jumlah' => [$jan, $feb, $mar, $apr, $mei, $jun, $jul, $agu, $sep, $okt, $nov, $des],
            'data' => $jumlah_user,
            'obat' => Obat::where('stok','<','10')->get()->all(),
            'inventaris' => Inventaris::where('kondisi','Rusak')->get()->all()
        ]);
    }
}
