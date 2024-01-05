<?php

namespace App\Http\Controllers;

use App\Models\AbsensiPelatih;
use Illuminate\Http\Request;

class GajiPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = session()->get('pelatih')->id;
        $jumlahAbsen = count(AbsensiPelatih::where(['id_user' => $id, 'status' => "Hadir"])->get());
        $jumK1 = count(AbsensiPelatih::where(['id_user' => $id, 'status' => "Hadir", "kelas" => 1])->get());
        $jumK2 = count(AbsensiPelatih::where(['id_user' => $id, 'status' => "Hadir", "kelas" => 2])->get());
        $jumK3 = count(AbsensiPelatih::where(['id_user' => $id, 'status' => "Hadir", "kelas" => 3])->get());
        $jumK4 = count(AbsensiPelatih::where(['id_user' => $id, 'status' => "Hadir", "kelas" => 4])->get());
        return view('pelatih.gaji', [
            'jumlahAbsen' => $jumlahAbsen,
            'k1' => $jumK1,
            'k2' => $jumK2,
            'k3' => $jumK3,
            'k4' => $jumK4,
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
