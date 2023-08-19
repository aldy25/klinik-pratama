<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Http\Requests\StoreInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.inventaris.inventaris',[
            'title' => 'Inventaris',
            'data'=>Inventaris::all()
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
        return view('dashboard.inventaris.create_inventaris',[
            'title' => 'Inventaris',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInventarisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventarisRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'nama' => 'required:unique:inventariss',
            'kondisi' => 'required',
            'keterangan' => 'required'
        ]);

        Inventaris::create($validate);

        return redirect('/inventaris')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('dashboard.inventaris.edit_inventaris',[
            'title' => 'Inventaris',
            'inventaris' => Inventaris::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventarisRequest  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventarisRequest $request, $id)
    {
        $this->authorize('admin');
        $inventaris = Inventaris::find($id);
        $rules =[
            'kondisi' => 'required',
            'keterangan' => 'required'
        ];
        if($request->nama != $inventaris->nama){
            $rules['nama'] = 'required:unique:inventariss';
        }
        $validate = $request->validate($rules);

        Inventaris::where('id',$inventaris->id)
                ->update($validate);

        return redirect('/inventaris')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        Inventaris::destroy($id);

        return redirect('/inventaris')->with('Sukses','Data berhasil dihapus !');
    }
}
