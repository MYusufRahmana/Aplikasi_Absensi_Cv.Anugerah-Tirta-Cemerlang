<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\pelatih;
use App\Models\register;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            "password" => 'required'
        ]);

        if ($credentials) {
            $user = null;
            if (register::where(['email' => $request->email])->first()) {
                $user = register::where(['email' => $request->email])->first();
            } elseif (pelatih::where(['email' => $request->email])->first()) {
                $user = pelatih::where(['email' => $request->email])->first();
            } else {
                $user = Admin::where(['email' => $request->email])->first();
            };

            if ($user) {
                if ($user->status == "nonaktif") {
                    return redirect('/login')->with('error', 'Akun Anda Sedang Non-aktif');
                } else {

                    if (Hash::check($request->password, $user->password)) {
                        if (($user->role == "member")) {
                            Session::put('member', $user);
                        }
                        if (Hash::check($request->password, $user->password)) {
                            if ($user->role == "pelatih") {
                                Session::put('pelatih', $user);
                            }
                        }
                        if (Hash::check($request->password, $user->password)) {
                            if ($user->role == "admin") {
                                Session::put('admin', $user);
                            }
                        }
                        return redirect('/dashboard');
                    };
                    return redirect('/login')->with('error', "Your login credentials don't match an account in our system");
                }
            } else {
                return redirect('/login')->with('error', "Your login credentials don't match an account in our system");
            }
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
