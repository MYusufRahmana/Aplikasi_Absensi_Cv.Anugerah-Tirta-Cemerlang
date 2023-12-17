<?php

namespace App\Http\Controllers;

use App\Models\absensi_pelatih;
use App\Http\Requests\Storeabsensi_pelatihRequest;
use App\Http\Requests\Updateabsensi_pelatihRequest;
use App\Models\RiwayatAbsensiPelatih;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $date = Carbon::now()->format('Y-m-d 00:00:00');
        $id_user = $request->session()->get('pelatih')->id;
        $validate = $request ->validate([
            'status'=>'required',
            "keterangan" =>'string',

        ]);
        if(absensi_pelatih::where('id_user', $id_user)->get()->isEmpty()) {
            absensi_pelatih::create([
                "status" =>"Menunggu",
                 "id_user" =>$id_user,
                 "waktu_absen" => now()->format('Y-m-d')
            ]);
            RiwayatAbsensiPelatih::create([
                "id_user" =>$id_user,
                "waktu_absen" => now()->format('Y-m-d'),
                "status" =>"Menunggu",
            ]);
            return redirect()->route('absenpelatih.index')->with('success', "Berhasil Mengajukan Absen" );
        }
        else {
            if (absensi_pelatih::where('id_user', $id_user)->whereDate('waktu_absen', now()->toDateString())->exists()) {
                return redirect()->route('absenpelatih.index')->with('warning', 'Anda Sudah Mengajukan Absen Hari ini');
            }
            else {
                absensi_pelatih::create([
                    "status" =>"Menunggu",
                     "id_user" =>$id_user,
                     "waktu_absen" => now()->format('Y-m-d')
                ]);
                RiwayatAbsensiPelatih::create([
                    "id_user" =>$id_user,
                    "waktu_absen" => now()->format('Y-m-d'),
                    "status" =>"Menunggu",
                ]);
                return redirect()->route('absenpelatih.index')->with('success', "Berhasil Mengajukan Absen" );

            }
        }
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
