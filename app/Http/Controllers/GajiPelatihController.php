<?php

namespace App\Http\Controllers;

use App\Models\absensi_pelatih;
use App\Models\pelatih;
use App\Models\riwayatabsensipelatih;
use Illuminate\Http\Request;

class GajiPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=session()->get('pelatih')->id;
        // $user = absensi_pelatih::where(['id_user' => $id])->get();
        $jumlahAbsen = count(absensi_pelatih::where(['id_user' => $id, 'status'=>"Hadir"])->get());
        $jumK1 = count(absensi_pelatih::where(['id_user' => $id, 'status'=>"Hadir","kelas"=>1])->get());
        $jumK2 = count(absensi_pelatih::where(['id_user' => $id, 'status'=>"Hadir","kelas"=>2])->get());
        $jumK3 = count(absensi_pelatih::where(['id_user' => $id, 'status'=>"Hadir","kelas"=>3])->get());
        $jumK4 = count(absensi_pelatih::where(['id_user' => $id, 'status'=>"Hadir","kelas"=>4])->get());
        return view('pelatih.gaji',[
            'jumlahAbsen'=>$jumlahAbsen,
            'k1'=>$jumK1,
            'k2'=>$jumK2,
            'k3'=>$jumK3,
            'k4'=>$jumK4,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
