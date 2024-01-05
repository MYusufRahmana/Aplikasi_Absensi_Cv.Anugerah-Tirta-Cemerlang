<?php

namespace App\Http\Controllers;

use App\Models\AbsensiPelatih;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = session()->get('pelatih')->id;
        $absensi = AbsensiPelatih::where('id_user', $user_id)->get();
        return view('absenPelatih.index', compact('absensi'));
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
        $request->validate([
            'kelas' => 'required',
            "keterangan" => 'string',

        ]);
        if (AbsensiPelatih::where('id_user', $id_user)->get()->isEmpty()) {
            AbsensiPelatih::create([
                "id_user" => $id_user,
                "kelas" => $request->kelas,
                "waktu_absen" => now()->format('Y-m-d H:i:s'),
                "status" => "Menunggu",
            ]);
            return redirect()->route('absenpelatih.index')->with('success', "Berhasil Mengajukan Absen");
        } else {
            if (AbsensiPelatih::where('id_user', $id_user)->whereDate('waktu_absen', now()->toDateString())->exists()) {
                return redirect()->route('absenpelatih.index')->with('warning', 'Anda Sudah Mengajukan Absen Hari ini');
            } else {
                AbsensiPelatih::create([
                    "id_user" => $id_user,
                    "kelas" => $request->kelas,
                    "waktu_absen" => now()->format('Y-m-d H:i:s'),
                    "status" => "Menunggu",
                ]);
                return redirect()->route('absenpelatih.index')->with('success', "Berhasil Mengajukan Absen");
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AbsensiPelatih $absensi_pelatih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbsensiPelatih $absensi_pelatih)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbsensiPelatih $absensi_pelatih)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbsensiPelatih $absensi_pelatih)
    {
        //
    }
}
