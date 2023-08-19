<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        return view('dashboard.pasien.pasien',[
            'title' => 'Pasien',
            'data' => Pasien::all(),
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
        $id = Pasien::orderby('id','desc')->get()->first()->id;
        return view('dashboard.pasien.create_pasien',[
            'title' => 'Pasien',
            'id' => $id+1,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePasienRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'no_rm' => 'required:unique:pasiens',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'nama_kk' => 'required'
        ]);

        Pasien::create($validate);

        return redirect('/pasien')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('dashboard.pasien.edit_pasien',[
            'title' => 'Pasien',
            'pasien'=>Pasien::find($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePasienRequest  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasienRequest $request, $id)
    {
        $this->authorize('admin');
        $pasien = Pasien::find($id);
        $rules = [
            'no_rm' => 'required:unique:pasiens',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'nama_kk' => 'required'
        ];
        
        $validate = $request->validate($rules);

        Pasien::where('id',$pasien->id)
                ->update($validate);

        return redirect('/pasien')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        Pasien::destroy($id);

        return redirect('/pasien')->with('Sukses','Data berhasil dihapus !');

    }
}
