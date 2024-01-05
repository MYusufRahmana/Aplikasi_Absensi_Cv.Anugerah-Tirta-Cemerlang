<?php

namespace App\Http\Controllers;

use App\Models\AbsensiMember;
use Illuminate\Http\Request;

class AbsenKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $kelas_member = [
            'kelas_1' => [
                'title' => "Kelas Pemula - Group",
                'data' => AbsensiMember::where('id_kelas_member', '1')->whereDate('waktu_absen', today())->get()
            ],
            'kelas_2' => [
                'title' => "Kelas Pemula - Regular",
                'data' => AbsensiMember::where('id_kelas_member', '2')->whereDate('waktu_absen', today())->get()
            ],
            'kelas_3' => [
                'title' => "Kelas Pemula - Private",
                'data' => AbsensiMember::where('id_kelas_member', '3')->whereDate('waktu_absen', today())->get()
            ],
            'kelas_4' => [
                'title' => "Jalur Prestasi",
                'data' => AbsensiMember::where('id_kelas_member', '4')->whereDate('waktu_absen', today())->get()
            ],
        ];

        return view('absenkelas.index', [
            'kelas_member' => $kelas_member,
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
