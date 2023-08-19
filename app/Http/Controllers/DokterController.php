<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\User;
use App\Http\Requests\StoreDokterRequest;
use App\Http\Requests\UpdateDokterRequest;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.dokter.dokter',[
            'title' => 'Dokter',
            'data' => Dokter::all()
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
        return view('dashboard.dokter.create_dokter',[
            'title' => 'Dokter'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDokterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDokterRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'nik' => 'required:unique:dokters',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required:unique:dokters|email:dns',
            'password'=>'required'
        ]);

        User::create([
            'email' => $request->email,
            'level_id' => 3,
            'password' => bcrypt($request->password)
        ]);

        $lastuser = User::orderby('id','desc')->get()->first();
        Dokter::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'user_id' => $lastuser->id
        ]);

        return redirect('/dokter')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('dashboard.dokter.edit_dokter',[
            'title' => 'Dokter',
            'dokter'=>Dokter::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDokterRequest  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDokterRequest $request, $id)
    {
        $this->authorize('admin');
        $dokter = Dokter::find($id);
        $rules = [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ];
        if($request->nik != $dokter->nik){
            $rules['nik'] = 'required:unique:dokters';
        }
        $validate = $request->validate($rules);

        Dokter::where('id',$dokter->id)
                ->update($validate);

        return redirect('/dokter')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $userid = Dokter::find($id)->user_id;
        User::destroy($userid);
        Dokter::destroy($id);
        return redirect('/dokter')->with('Sukses','Data berhasil dihapus !');
    }
}
