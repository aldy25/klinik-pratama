<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Pasien;
use App\Http\Requests\StoreLabRequest;
use App\Http\Requests\UpdateLabRequest;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('laboratorium.lab',[
            'title' => 'Pemeriksaan Lab',
            'data' => Lab::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('laboratorium.pemeriksaan_lab',[
            'title' => 'Pemeriksaan Lab',
            'data' => Pasien::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'pasien_id' => 'required',
            'wbc' => '',
            'rbc' => '',
            'hgb' => '',
            'hct' => '',
            'plt' => '',
            'gds' => '',
            'gdp' => '',
            'gd2' => '',
            'cholesterol' => '',
            'trigliserida' => '',
            'asam_urat' => '',
            'ureum' => '',
            'kreatin' => '',
            'goldar' => '',
            'hcg' => '',
            'malaria' => '',
            'warna' => '',
            'ph' => '',
            'berat_jenis' => '',
            'protein' => '',
            'reduksi' => '',
            'billirubin' => '',
            'sedimen' => '',
            'eritrosit' => '',
            'leukosit' => ''
        ]);
        Lab::create($validate);

        return redirect('/lab')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(Lab $lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('laboratorium.edit_lab',[
            'title' => 'Pemeriksaan Lab',
            'data' => Lab::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLabRequest  $request
     * @param  \App\Models\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabRequest $request, $id)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'wbc' => '',
            'rbc' => '',
            'hgb' => '',
            'hct' => '',
            'plt' => '',
            'gds' => '',
            'gdp' => '',
            'gd2' => '',
            'cholesterol' => '',
            'trigliserida' => '',
            'asam_urat' => '',
            'ureum' => '',
            'kreatin' => '',
            'goldar' => '',
            'hcg' => '',
            'malaria' => '',
            'warna' => '',
            'ph' => '',
            'berat_jenis' => '',
            'protein' => '',
            'reduksi' => '',
            'billirubin' => '',
            'sedimen' => '',
            'eritrosit' => '',
            'leukosit' => ''
        ]);
        Lab::where('id',$id)
                ->update($validate);

        return redirect('/lab')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        Lab::destroy($id);

        return redirect('/lab')->with('Sukses','Data berhasil dihapus !');
    }

    public function cetak($id){
        return view('laboratorium.cetak_hasil_lab',[
            'data' => Lab::find($id)
        ]);

    }
}
