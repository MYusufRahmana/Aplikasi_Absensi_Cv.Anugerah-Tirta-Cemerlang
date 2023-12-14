<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\register;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = session()->get('member');
        return view('profile.index',compact('profile'));
    }
    
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, String $id)
    {
        $user=register::find($id);
        $validatedData=$request->validate([
            'Nama'=>'required|string', 
            'Hp'=>'required|string', 
            'Ortu'=>'required|string', 
            'Alamat'=>'required|string', 
         ]);
    
         if($validatedData) {
            $user->update([
                'Nama'=>$request->Nama,
                'Hp'=>$request->Hp,
                'Ortu'=>$request->Ortu,
                'Alamat'=>$request->Alamat,
            ]);
         }
         return redirect()->route('profile.index')->with('success','Data berhasil di ubah');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
