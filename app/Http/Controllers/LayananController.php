<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Http\Requests\StoreLayananRequest;
use App\Http\Requests\UpdateLayananRequest;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.layanan.layanan',[
            'title' => 'Layanan',
            'layanan'=>Layanan::all()
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
        return view('dashboard.layanan.create_layanan',[
            'title' => 'Layanan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLayananRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'nama' => 'required:unique:layanans',
            'harga' => 'required',
        ]);

        Layanan::create($validate);

        return redirect('/layanan')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('dashboard.layanan.edit_layanan',[
            'title' => 'Layanan',
            'layanan' => Layanan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLayananRequest  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLayananRequest $request, $id)
    {
        $this->authorize('admin');
        $layanan = Layanan::find($id);
        $rules =[
            'harga' => 'required',
        ];
        if($request->nama != $layanan->nama){
            $rules['nama'] = 'required:unique:layanans';
        }
        $validate = $request->validate($rules);

        Layanan::where('id',$layanan->id)
                ->update($validate);

        return redirect('/layanan')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        Layanan::destroy($id);

        return redirect('/layanan')->with('Sukses','Data berhasil dihapus !');
    }
}
