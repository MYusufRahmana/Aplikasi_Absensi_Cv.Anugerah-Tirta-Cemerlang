<?php

namespace App\Http\Controllers;

use App\Models\AbsensiPelatih;
use App\Models\RiwayatAbsensiPelatih;
use Illuminate\Http\Request;

class RiwayatAbsensiPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = session()->get('pelatih')->id;
        $user = AbsensiPelatih::where(['id_user'=>$user_id])->get();
        return view('riwayatabsenpelatih.index',compact('user'));
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
