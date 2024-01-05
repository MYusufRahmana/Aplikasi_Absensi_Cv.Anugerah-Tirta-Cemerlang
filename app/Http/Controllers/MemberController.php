<?php

namespace App\Http\Controllers;

use App\Models\KelasMember;
use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = register::all();
        return view('member.index',[
            'member'=> $member
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
        $member = register::find($id);
        return view('member.edit',[
            'member'=>$member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return dd($request);
        $member = register::find($id);
        $kelas = KelasMember::where('id_user',$id)->where('status',"0")->first();
        $validatedata = request()->validate([
            'Nama'=>'required|string',
            'Sekolah'=>'required|string',
            'Health'=>'required|string',
            'kelas'=>'required|string',
        ]);
        if($validatedata) {
            $member->update([
                'Nama'=>$request->Nama,
                'Sekolah'=>$request->Sekolah,
                'Health'=>$request->Health,
                'status'=>$request->status,
            ]);
            $kelas->update([
                'kelas'=>$request->kelas
            ]);
            
            return redirect('/member')->with('success','Berhasil mengubah data');
        }
        else {
            return Redirect::back()->with('error','Gagal mengubah data');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = register::findOrFail($id);
        if($member) {
            $member->delete();
        }
        return redirect()->back()->with('success','Berhasil Menghapus Member');
    }
}
