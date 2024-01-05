<?php

namespace App\Http\Controllers;

use App\Models\AbsenAdmin;
use App\Models\RiwayatAbsensiPelatih;
use Illuminate\Http\Request;

class RiwayatAbsensiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session()->has('admin')) {
            $user_id = session()->get('admin')->id;
        }
        if(session()->has('superadmin')) {
            $user_id = session()->get('superadmin')->id;
        }
        $user = AbsenAdmin::where(['id_user'=>$user_id])->get();
        return view('riwayatabsenadmin.index',compact('user'));
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
