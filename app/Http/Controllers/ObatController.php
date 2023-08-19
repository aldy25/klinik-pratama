<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Http\Requests\StoreObatRequest;
use App\Http\Requests\UpdateObatRequest;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('apoteker');
        return view('dashboard.obat.obat',[
            'title' => 'Obat',
            'data' => Obat::all(),
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
        return view('dashboard.obat.create_obat',[
            'title' => 'Obat'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObatRequest $request)
    {
        $this->authorize('apoteker');
        $validate = $request->validate([
            'nama' => 'required|unique:obats',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
        ]);

        Obat::create($validate);

        return redirect('/obat')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('apoteker');
        return view('dashboard.obat.edit_obat',[
            'title' => 'Obat',
            'obat'=>Obat::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObatRequest  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObatRequest $request, $id)
    {
        $this->authorize('apoteker');
        $obat = Obat::find($id);
        $rules =[
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
        ];
        if($request->nama != $obat->nama){
            $rules['nama'] = 'required|unique:obats';
        }
        $validate = $request->validate($rules);

        Obat::where('id',$obat->id)
                ->update($validate);

        return redirect('/obat')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('apoteker');
        Obat::destroy($id);

        return redirect('/obat')->with('Sukses','Data berhasil dihapus !');

    }
}
