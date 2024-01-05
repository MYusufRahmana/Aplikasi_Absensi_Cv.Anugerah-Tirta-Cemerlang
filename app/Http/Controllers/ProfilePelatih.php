<?php

namespace App\Http\Controllers;

use App\Models\pelatih;
use Illuminate\Http\Request;

class ProfilePelatih extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatih = session()->get('pelatih')->id;
        $find = pelatih::find($pelatih);
        return view('profilepelatih.index',[
            'pelatih'=>$find
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelatih = pelatih::find($id);
        $validatedData = $request->validate([
            'Nama_Pelatih'=>'required|string',
            'Hp'=>'required|numeric',
            'Email'=>'required',
            'kelas'=>'required|string',
            'Alamat'=>'required|string',
        ]);

        if($validatedData) {
            $pelatih->update([
                'Nama_Pelatih'=>$request->Nama_Pelatih,
                'Hp'=>$request->Hp,
                'Email'=>$request->Email,
                'kelas'=>$request->kelas,   
                'Alamat'=>$request->Alamat,
            ]);
            return redirect()->back()->with('success','Berhasil Memperbarui Profile');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
