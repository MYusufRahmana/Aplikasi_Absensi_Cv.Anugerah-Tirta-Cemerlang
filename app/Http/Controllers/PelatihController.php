<?php

namespace App\Http\Controllers;

use App\Models\pelatih;
use App\Models\RiwayatAbsensiPelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatih = pelatih::all();
        return view('pelatih.index',[
            'pelatih'=>$pelatih
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatih.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(pelatih $request)
    {
        return dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(pelatih $pelatih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelatih = pelatih::find($id);
        return view('pelatih.edit',[
            "pelatih"=>$pelatih
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
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
             return redirect('/pelatih')->with('success',"Gaji Telah Diperbarui");
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelatih $pelatih)
    {
        //
    }
}
