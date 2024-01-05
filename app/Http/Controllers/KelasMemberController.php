<?php

namespace App\Http\Controllers;

use App\Models\KelasMember;
use App\Models\Register;
use Illuminate\Http\Request;

class KelasMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kelas_member = KelasMember::where(['kelas' => $request->get('kelas', 1)])->get();
        return view('kelasmember.index', [
            'kelas_member' => $kelas_member
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $member = register::get();
        return view('kelasmember.create', [
            'member' => $member
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelas_member = KelasMember::where(['id_user' => $request->no, 'status' => '0'])->first();
        if ($kelas_member) {
            return redirect()->back()->with('error', 'Member sudah memiliki kelas');
        } else {
            KelasMember::create([
                'id_user' => $request->no,
                'kelas' => $request->kelas,
                'status' => "0",
            ]);
            return redirect('kelasmember')->with('success', 'Berhasil menambahkan member kee dalam kelas');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
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
