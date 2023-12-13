<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Http\Requests\StoreregisterRequest;
use App\Http\Requests\UpdateregisterRequest;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreregisterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateregisterRequest $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
    public function showDashboard()
    {
        // Menghitung jumlah total member
        $totalMembers = Register::count();

        // Menghitung jumlah member yang memiliki status tertentu (misalnya status = 1)
        $activeMembers = Register::where('status', 1)->count();

        // Menghitung jumlah member laki-laki dan perempuan
        $totalMales = Register::where('Gender', 'laki-laki')->count();
        $totalFemales = Register::where('Gender', 'perempuan')->count();

        // Kirim data ke tampilan 'mainmenu'
        return view('mainmenu', compact('totalMembers', 'activeMembers', 'totalMales', 'totalFemales'));
    }
}
