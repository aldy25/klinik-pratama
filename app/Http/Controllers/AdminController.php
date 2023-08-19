<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('owner');
        return view('dashboard.admin.admin',[
            'title' => 'Admin',
            'data' => Admin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('owner');
        return view('dashboard.admin.create_admin',[
            'title' => 'Admin',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $this->authorize('owner');
        $validate = $request->validate([
            'nik' => 'required:unique:admins',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required:unique:admins|email:dns',
            'password'=>'required'
        ]);

        User::create([
            'email' => $request->email,
            'level_id' => 2,
            'password' => bcrypt($request->password)
        ]);

        $lastuser = User::orderby('id','desc')->get()->first();
        Admin::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'user_id' => $lastuser->id
        ]);

        return redirect('/admin')->with('Sukses','Data Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('owner');
        return view('dashboard.admin.edit_admin',[
            'title' => 'Admin',
            'admin'=>Admin::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $this->authorize('owner');
        $admin = Admin::find($id);
        $rules = [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ];
        if($request->nik != $admin->nik){
            $rules['nik'] = 'required:unique:admins';
        }
        $validate = $request->validate($rules);

        Admin::where('id',$admin->id)
                ->update($validate);

        return redirect('/admin')->with('Sukses','Data Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('owner');
        $userid = Admin::find($id)->user_id;
        User::destroy($userid);
        Admin::destroy($id);
        return redirect('/admin')->with('Sukses','Data berhasil dihapus !');
    }
}
