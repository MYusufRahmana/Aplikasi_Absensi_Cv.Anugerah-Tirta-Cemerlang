<?php

namespace App\Http\Controllers;

use App\Models\pelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PengajianPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penggajianPelatih.index',[
            "pelatih" =>pelatih::all()
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
        $pelatih = pelatih::find($id);
        return view('penggajianpelatih.edit',[
            "pelatih"=>$pelatih
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gaji = intval($request->gaji);
        $pelatih=pelatih::find($id);

        $validatedData=$request->validate([
            'gaji'=>'required|numeric', 
         ]);
         if($validatedData) {
             $pelatih->update([
                 'gaji'=>$gaji
             ]);
             return Redirect::back()->with('success',"Gaji Telah Diperbarui");
         }   

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
