<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::get();
        return view('admin.index',[
            'admin'=>$admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email'=>'required',
            'password'=>'string|required',
            'username'=>'string|required',
            'nama'=>'string|required',
            'hp'=>'numeric|required',
        ]);
        if($validateData) {
            Admin::create([
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'username'=>$request->username,
                'nama'=>$request->nama,
                'hp'=>$request->hp,
                'role'=>'admin'
            ]);
            return redirect('/admin')->with('success','Berhasil Menambah Admin');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::find($id);
        return view('admin.edit',[
            'admin'=>$admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin= Admin::find($id);
        $validateData = $request->validate([
            'nama'=>'string|required',
            'username'=>'string|required',
            'email'=>'string|required'
        ]);

        if($validateData) {
            $admin->update([
                'nama'=>$request->nama,
                'username'=>$request->username,
                'email'=>$request->email,
            ]);
            return redirect('admin')->with('success','Berhasil Edit Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        if($admin) {
            $admin->delete();
        }
        return redirect()->back()->with('success','Admin Berhasil Di hapus');
    }
}
