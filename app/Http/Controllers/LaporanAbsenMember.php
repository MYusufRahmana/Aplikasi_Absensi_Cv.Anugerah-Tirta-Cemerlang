<?php

namespace App\Http\Controllers;

use App\Models\AbsensiMember;
use App\Models\KelasMember;
use App\Models\Register;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanAbsenMember extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas_member = [
            'kelas_1' => [
                'title' => "Kelas Pemula - Group",
                'data' => KelasMember::where('kelas', '1')->get()
            ],
            'kelas_2' => [
                'title' => "Kelas Pemula - Regular",
                'data' => KelasMember::where('kelas', '2')->get()
            ],
            'kelas_3' => [
                'title' => "Kelas Pemula - Private",
                'data' => KelasMember::where('kelas', '3')->get()
            ],
            'kelas_4' => [
                'title' => "Jalur Prestasi",
                'data' => KelasMember::where('kelas', '4')->get()
            ],
        ];

        return view('laporanabsenmember.index', [
            'kelas_member' => $kelas_member,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas_member = [
            'kelas_1' => [
                'title' => "Kelas Pemula - Group",
                'data' => KelasMember::where('kelas', '1')->get()
            ],
            'kelas_2' => [
                'title' => "Kelas Pemula - Regular",
                'data' => KelasMember::where('kelas', '2')->get()
            ],
            'kelas_3' => [
                'title' => "Kelas Pemula - Private",
                'data' => KelasMember::where('kelas', '3')->get()
            ],
            'kelas_4' => [
                'title' => "Jalur Prestasi",
                'data' => KelasMember::where('kelas', '4')->get()
            ],
        ];

        $pdf = PDF::loadview('laporanabsenmember.pdf', [
            'kelas_member' => $kelas_member,
        ]);
        return $pdf->download('Laporan_Member.pdf');
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
