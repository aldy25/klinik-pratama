<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Diagnosa;
use App\Models\Resep;
use App\Models\Obat;
use App\Models\Admin;
use App\Models\Layanan;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('pengobatan.transaksi',[
            'title' => 'Transaksi Pengobatan',
            'data' => Transaksi::where('jml_bayar',0)->get()->all() 
        ]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->authorize('admin');
        return view('pengobatan.proses',[
            'title' => 'Proses Transaksi Pengobatan',
            'data' => Transaksi::where('id',$id)->get()->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'pasien_id' => 'required',
            'keluhan' => 'required',
            'dokter_id' => 'required',
            'diagnosa' => 'required',
            'terapi' => 'required',
            'layanan_id' => 'required',
            'resep' => 'required',
        ]);

        Diagnosa::create(['pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'terapi' => $request->terapi,        
        ]);

        $lastdiagnosa = Diagnosa::orderby('id','desc')->get()->first();

        $resep = $request->resep;
        
        foreach ($resep as $data) {
            $harga = Obat::where('id',$data['obat'])->first()->harga;
            $total = $harga * $data['jumlah'];
            Resep::create([
                'diagnosa_id' => $lastdiagnosa->id,
                'obat_id' => $data['obat'],
                'penggunaan' => $data['penggunaan'],
                'jumlah' => $data['jumlah'],
                'total_hrg' => $total
            ]);
        }
        

        $admin = Admin::where('user_id',auth()->user()->id)->get()->first();
        $harga = Layanan::where('id',$request->layanan_id)->get()->first()->harga;
        
        $cari_hrg_resep = Resep::where('diagnosa_id',$lastdiagnosa->id)->get()->all();
        $total = 0;
        foreach ($cari_hrg_resep as $rs) {
            $temp = $rs->total_hrg;
            $total = $total + $temp;
        }
        
        Transaksi::create([
            'admin_id' => $admin->id,
            'diagnosa_id' => $lastdiagnosa->id,
            'layanan_id' => $request->layanan_id,
            'hrg_pengobatan' => $harga,
            'total_hrg_obat' => $total,
            'biaya_lab' => 0,
            'biaya_tambahan' => 0,
            'jml_total' => 0,
            'jml_bayar' => 0,
            'jml_kembali' => 0,
            'status_pengambilan_obat' => 'Belum Diambil'
        ]);


        return redirect('/pengobatan')->with('Sukses','Data berhasil ditambahkan! Periksa di menu transaksi!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        $this->authorize('admin');
        return view('pengobatan.riwayat',[
            'title' => "Riwayat Transaksi",
            'data' => Transaksi::where('jml_bayar','!=',0)->orderBy('created_at','desc')->get()->all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiRequest $request, $id)
    {
        $this->authorize('admin');
        Transaksi::where('id',$id)
                ->update([
                    'biaya_lab' => $request->biaya_lab,
                    'biaya_tambahan' => $request->biaya_tambahan,
                    'jml_total' => $request->total,
                    'jml_bayar' => $request->jml_bayar,
                    'jml_kembali' => $request->kembalian,
                    'status_pengambilan_obat' => 'Perlu Diambil'
                ]);

        return redirect('/transaksi')->with('Sukses','Transaksi Berhasil Diproses !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function cetak($id){
        $this->authorize('admin');
        $transaksi = Transaksi::find($id);
        $diagnosa = Diagnosa::where('id',$transaksi->diagnosa_id)->first();
        return view('pengobatan.cetak_transaksi',[
            'title' => 'Pengobatan',
            'transaksi' => $transaksi,
            'diagnosa' => $diagnosa
        ]);
    }

    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
