<?php

namespace App\Http\Controllers;

use App\Models\AbsenAdmin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AbsenAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = session()->get('admin')->id;
        $absensi = AbsenAdmin::where('id_user', $user_id)->get();
        return view('absenadmin.index',[
            'absensi'=>$absensi
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
        $date = Carbon::now()->format('Y-m-d 00:00:00');
        $id_user = $request->session()->get('admin')->id;
        $validate = $request ->validate([
            'status'=>'required',
            "keterangan" =>'string',
        ]);
        if (AbsenAdmin::where('id_user', $id_user)->get()->isEmpty()) {
            AbsenAdmin::create([
                "status" => $request->validate(['status' => 'required'])['status'],
                "id_user" => $id_user,
                "waktu_absen" => now()->format('Y-m-d')
            ]);
            return redirect()->route('absenadmin.index')->with('success', "Berhasil Absensi" );
        }
        else {
            if(AbsenAdmin::find($id_user)->waktu_absen==$date) {
                return Redirect::back()->with('warning',"Anda Sudah Absen Hari ini");
            }
        }
        if(AbsenAdmin::find($id_user)->waktu_absen==$date) {
            return Redirect::back()->with('warning',"Anda Sudah Absen Hari ini");
        }
        else {
            AbsenAdmin::create([
                "status" =>$request->validate(['status'=>'required'])['status'],
                "id_user" =>$id_user,
                "waktu_absen" => now()->format('Y-m-d')
            ]);
        }
        return redirect()->route('absenadmin.index')->with('success', "Berhasil Absensi" );
    }

    /**
     * Display the specified resource.
     */
    public function show(AbsenAdmin $absenAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbsenAdmin $absenAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbsenAdmin $absenAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbsenAdmin $absenAdmin)
    {
        //
    }
}
