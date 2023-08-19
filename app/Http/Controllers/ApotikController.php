<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Transaksi;
use App\Models\Diagnosa;
use App\Models\Resep;

use Illuminate\Http\Request;

class ApotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('apoteker');
        return view('dashboard.obat.pengambilan',[
            'title' => 'Pengambilan Obat',
            'data' => Transaksi::where('status_pengambilan_obat','Perlu Diambil')->get()->all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $this->authorize('apoteker');
        return view('dashboard.obat.restock',[
            'title' => 'Re-Stock Obat',
            'obat' => Obat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.obat.resep',[
            'title' => 'Pengambilan Obat',
            'data' => Diagnosa::where('id', $id)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        Transaksi::where('diagnosa_id',$id)
                    ->update(['status_pengambilan_obat' => "Diambil"]);
        $resep = Resep::where('diagnosa_id',$id)->get()->all();

        foreach ($resep as $data) {
            $now = Obat::where('id',$data->obat_id)->first()->stok;
            $new = $now - $data->jumlah;

            Obat::where('id',$data->obat_id)
                    ->update(['stok' => $new]);
        }

        return redirect('/obat/pengambilan')->with('Sukses','Konfirmasi pengambilan obat berhasil !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $this->authorize('apoteker');
        $update = $request->restock;
        
        foreach ($update as $data) {
            $now = Obat::where('id',$data['obat'])->first()->stok;
            $new = $now + $data['jumlah'];

            Obat::where('id',$data['obat'])
                    ->update(['stok' => $new]);
        }
        
        return redirect('/obat')->with('Sukses','Obat Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        //
    }
}
