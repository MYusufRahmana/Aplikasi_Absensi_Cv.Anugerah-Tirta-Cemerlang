<?php

namespace App\Http\Controllers;

use App\Models\absensi_member;
use App\Http\Requests\Storeabsensi_memberRequest;
use App\Http\Requests\Updateabsensi_memberRequest;

class AbsensiMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensi = absensi_member::all();
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
