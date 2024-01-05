<?php

namespace App\Http\Controllers;

use App\Models\pelatih;
use App\Models\RiwayatAbsensiPelatih;
use Illuminate\Contracts\Support\ValidatedData;
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
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Nama_Pelatih'=>'string|required',
            'Hp'=>'numeric|required',
            'Alamat'=>'required',
            'Email'=>'required',
            'kelas'=>'string|required',
            'password'=>'string|required',
        ]);
        pelatih::create([
            'Nama_Pelatih'=>$request->Nama_Pelatih,
            'Hp'=>$request->Hp,
            'Alamat'=>$request->Alamat,
            'kelas'=>$request->kelas,
            'Email'=>$request->Email,
            'password'=>bcrypt($request->password),
            'status'=>'1',
            'role'=>"pelatih",
        ]);
        return redirect('pelatih')->with('success',"Berhasil Menambah Akun Pelatih");

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
        $status=$request->status;
        $pelatih=pelatih::find($id);

        $validatedData=$request->validate([
            'status'=>'required|string',
            'kelas'=>"required"
         ]);
         if($validatedData) {
             $pelatih->update([
                 'status'=>$status,
                 'kelas'=>$request->kelas
             ]);
             return redirect('/pelatih')->with('success',"Data Telah Diperbarui");
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatih = pelatih::findOrFail($id);
        if($pelatih) {
            $pelatih->delete();
        }
        return redirect()->back()->with('success','Pelatih Berhasil di Hapus');
    }
}
