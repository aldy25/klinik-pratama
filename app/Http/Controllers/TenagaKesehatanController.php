<?php

namespace App\Http\Controllers;

use App\Models\TenagaKesehatan;
use App\Http\Requests\StoreTenagaKesehatanRequest;
use App\Http\Requests\UpdateTenagaKesehatanRequest;

class TenagaKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.nakes.nakes',[
            'title' => 'Tenaga Kesehatan',
            'data' => TenagaKesehatan::all()
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
        return view('dashboard.nakes.create_nakes',[
            'title' => 'Tenaga Kesehatan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTenagaKesehatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTenagaKesehatanRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'nik' => 'required:unique:tenagakesehatans',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        TenagaKesehatan::create($validate);

        return redirect('/nakes')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TenagaKesehatan  $tenagaKesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(TenagaKesehatan $tenagaKesehatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenagaKesehatan  $tenagaKesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('dashboard.nakes.edit_nakes',[
            'title' => 'Tenaga Kesehatan',
            'nakes'=>TenagaKesehatan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTenagaKesehatanRequest  $request
     * @param  \App\Models\TenagaKesehatan  $tenagaKesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTenagaKesehatanRequest $request, $id)
    {
        $this->authorize('admin');
        $nakes = TenagaKesehatan::find($id);
        $rules = [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ];
        if($request->nik != $nakes->nik){
            $rules['nik'] = 'required:unique:tenagakesehatans';
        }
        $validate = $request->validate($rules);

        TenagaKesehatan::where('id',$nakes->id)
                ->update($validate);

        return redirect('/nakes')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenagaKesehatan  $tenagaKesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        TenagaKesehatan::destroy($id);
        return redirect('/nakes')->with('Sukses','Data berhasil dihapus !');
    }
}
