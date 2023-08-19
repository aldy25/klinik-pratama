<?php

namespace App\Http\Controllers;

use App\Models\Apoteker;
use App\Models\User;
use App\Http\Requests\StoreApotekerRequest;
use App\Http\Requests\UpdateApotekerRequest;

class ApotekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.apoteker.apoteker',[
            'title' => 'Apoteker',
            'data' => Apoteker::all()
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
        return view('dashboard.apoteker.create_apoteker',[
            'title' => 'Apoteker'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApotekerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApotekerRequest $request)
    {
        $this->authorize('admin');
        $validate = $request->validate([
            'nik' => 'required:unique:apotekers',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required:unique:apotekers|email:dns',
            'password'=>'required'
        ]);

        User::create([
            'email' => $request->email,
            'level_id' => 4,
            'password' => bcrypt($request->password)
        ]);

        $lastuser = User::orderby('id','desc')->get()->first();
        Apoteker::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'user_id' => $lastuser->id
        ]);

        return redirect('/apoteker')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function show(Apoteker $apoteker)
    {
        $this->authorize('admin');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        return view('dashboard.apoteker.edit_apoteker',[
            'title' => 'Apoteker',
            'apoteker'=>Apoteker::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApotekerRequest  $request
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApotekerRequest $request, $id)
    {
        $this->authorize('admin');
        $apoteker = Apoteker::find($id);
        $rules = [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ];
        if($request->nik != $apoteker->nik){
            $rules['nik'] = 'required:unique:dokters';
        }
        $validate = $request->validate($rules);

        Apoteker::where('id',$apoteker->id)
                ->update($validate);

        return redirect('/apoteker')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apoteker  $apoteker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $userid = Apoteker::find($id)->user_id;
        User::destroy($userid);
        Apoteker::destroy($id);
        return redirect('/apoteker')->with('Sukses','Data berhasil dihapus !');
    }
}
