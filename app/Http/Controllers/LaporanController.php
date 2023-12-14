<?php

namespace App\Http\Controllers;

use App\Models\absensi_pelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reqAbsenPelatih=absensi_pelatih::where("status","Menunggu")->get();
        return view('laporan.index',[
            'reqAbsen' => $reqAbsenPelatih
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
        $idAbsenPelatih = absensi_pelatih::find($id);
        if($request->H) {
            $idAbsenPelatih->update([
                'status'=>$request->H
            ]);
            return Redirect::back()->with('success','Verifikasi Absen Berhasil');
        }
        elseif ($request->B) {
            $idAbsenPelatih->update([
                'status'=>$request->B
            ]);
            return Redirect::back()->with('success','Verifikasi Absen Berhasil');
        }
        else {
            $idAbsenPelatih->update([
                'status'=>$request->I
            ]);
            return Redirect::back()->with('success','Verifikasi Absen Berhasil');
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
