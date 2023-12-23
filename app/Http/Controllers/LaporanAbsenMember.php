<?php

namespace App\Http\Controllers;

use App\Models\absensi_member;
use App\Models\register;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanAbsenMember extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = register::get();
        $idAbsenMember = absensi_member::get('id_user');
        $absenCounts = [];

        foreach ($idAbsenMember as $item) {
            $id=$item->id_user;
            $absenCount = absensi_member::where('id_user', $id)
                ->whereBetween('kelas', [1, 4])->get()->count();
            $absenCounts[$id] = $absenCount;
        }
        return view('laporanabsenmember.index', [
            'member' => $member,
            'absenCounts' => $absenCounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $member = register::get();
        $idAbsenMember = absensi_member::get('id_user');
        $absenCounts = [];

        foreach ($idAbsenMember as $item) {
            $id=$item->id_user;
            $absenCount = absensi_member::where('id_user', $id)
                ->whereBetween('kelas', [1, 4])->get()->count();
            $absenCounts[$id] = $absenCount;
        }

        $pdf = PDF::loadview('laporanabsenmember.pdf', ['member' => $member,'absenCounts'=>$absenCounts]);
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
