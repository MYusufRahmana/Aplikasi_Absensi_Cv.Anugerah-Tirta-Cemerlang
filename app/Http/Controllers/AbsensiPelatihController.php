<?php

namespace App\Http\Controllers;

use App\Models\absensi_pelatih;
use App\Http\Requests\Storeabsensi_pelatihRequest;
use App\Http\Requests\Updateabsensi_pelatihRequest;
use Illuminate\Http\Request;

class AbsensiPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $user_id = session()->get('pelatih')->id;
        $absensi = absensi_pelatih::where('id_user', $user_id)->get();
        return view ('absenPelatih.index',compact('absensi'));
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
        $id_user = $request->session()->get('pelatih')->id;
        $validate = $request ->validate([
            'status'=>'required',
            "keterangan" =>'string',

        ]);
        absensi_pelatih::create([
            "status" =>"Menunggu",
             "id_user" =>$id_user,
             "waktu_absen" => now()->format('Y-m-d H:i:s')
        ]);

        return redirect()->route('absenpelatih.index')->with('success', "Data Berhasil Dibuat" );
    }

    /**
     * Display the specified resource.
     */
    public function show(absensi_pelatih $absensi_pelatih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(absensi_pelatih $absensi_pelatih)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateabsensi_pelatihRequest $request, absensi_pelatih $absensi_pelatih)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(absensi_pelatih $absensi_pelatih)
    {
        //
    }
}
