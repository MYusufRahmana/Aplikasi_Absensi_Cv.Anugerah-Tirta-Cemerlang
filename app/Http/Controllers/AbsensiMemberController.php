<?php

namespace App\Http\Controllers;

use App\Models\AbsensiMember;
use App\Models\KelasMember;
use App\Models\Pelatih;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AbsensiMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $id_user = Session::get('member')->no;
        $absensi = AbsensiMember::whereRelation('kelas_member', 'status', '0')->where('id_user', $id_user)->get();
        $kelas_member_aktif = KelasMember::where(['id_user' => $id_user, 'status' => '0'])->first();
        if ($kelas_member_aktif) {
            $pelatih = Pelatih::where('kelas', $kelas_member_aktif->kelas)->get();
        }

        return view('absen.index', [
            'absensi' => $absensi,
            'kelas_member_aktif' => $kelas_member_aktif,
            'pelatih' => $pelatih ?? collect(),
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
        $id_user = Session::get('member')->no;
        $validate = $request->validate([
            'status' => 'required',
            "keterangan" => 'string',
        ]);
        $check_absensi = AbsensiMember::where('id_user', $id_user)
            ->whereDate('waktu_absen', now()->toDateString())
            ->count();
        if ($check_absensi < 1) {
            $kelas_member = KelasMember::where(['status' => '0', 'id_user' => $id_user])->first();
            AbsensiMember::create([
                "id_user" => $id_user,
                'id_kelas_member' => $kelas_member->id,
                "waktu_absen" => now()->format('Y-m-d H:i:s'),
                "status" => $validate['status'],
            ]);
            if (($kelas_member->kelas == 3 && $kelas_member->count_kehadiran >= 8) || $kelas_member->count_kehadiran >= 12) {
                $kelas_member->status = '1';
                $kelas_member->save();
            }
            return redirect()->route('absen.index')->with('success', "Berhasil Absensi");
        } else {
            return redirect()->route('absen.index')->with('warning', 'Anda Sudah Absen Hari ini');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AbsensiMember $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbsensiMember $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbsensiMember $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbsensiMember $absensi)
    {
        //
    }
}
