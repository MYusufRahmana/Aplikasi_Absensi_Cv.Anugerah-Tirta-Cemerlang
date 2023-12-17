<?php

namespace App\Http\Controllers;

use App\Models\absensi_member;
use App\Http\Requests\Storeabsensi_memberRequest;
use App\Http\Requests\Updateabsensi_memberRequest;
use App\Models\RiwayatAbsensiMember;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use League\Flysystem\UnableToRetrieveMetadata;
use Symfony\Component\HttpFoundation\Session\Session;

class AbsensiMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $user_id = session()->get('member')->no;
        $absensi = absensi_member::where('id_user', $user_id)->get();
        return view('absen.index',compact('absensi'));
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
    public function store(Storeabsensi_memberRequest $request)
    {
        $date = Carbon::now()->format('Y-m-d 00:00:00');
        $id_user = $request->session()->get('member')->no;
        $validate = $request ->validate([
            'status'=>'required',
            "keterangan" =>'string',

        ]);
        if (absensi_member::where('id_user', $id_user)->get()->isEmpty()) {
            absensi_member::create([
                "status" => $request->validate(['status' => 'required'])['status'],
                "id_user" => $id_user,
                "waktu_absen" => now()->format('Y-m-d')
            ]);
            RiwayatAbsensiMember::create([
                "id_user" =>$id_user,
                "kelas"=>$request->session()->get('member')->Kelas,
                "waktu_absen" => now()->format('Y-m-d'),
                "status" =>$request->status,
            ]);
            return redirect()->route('absen.index')->with('success', "Berhasil Absensi" );
        }else {
            if (absensi_member::where('id_user', $id_user)->whereDate('waktu_absen', now()->toDateString())->exists()) {
                return redirect()->route('absen.index')->with('warning', 'Anda Sudah Absen Hari ini');
            }
        }

        if (absensi_member::where('id_user', $id_user)->whereDate('waktu_absen', now()->toDateString())->exists()) {
            return redirect()->route('absen.index')->with('warning', 'Anda Sudah Absen Hari ini');
        }

        else {
            absensi_member::create([
                "status" =>$request->validate(['status'=>'required'])['status'],
                "id_user" =>$id_user,
                "waktu_absen" => now()->format('Y-m-d')
            ]);
            RiwayatAbsensiMember::create([
                "id_user" =>$id_user,
                "kelas"=>$request->session()->get('member')->Kelas,
                "waktu_absen" => now()->format('Y-m-d'),
                "status" =>$request->status,
            ]);
        }
        return redirect()->route('absen.index')->with('success', "Berhasil Absensi" );
    }

    /**
     * Display the specified resource.
     */
    public function show(absensi_member $absensi_member)
    {   
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(absensi_member $absensi_member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateabsensi_memberRequest $request, absensi_member $absensi_member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(absensi_member $absensi_member)
    {
        //
    }
}
