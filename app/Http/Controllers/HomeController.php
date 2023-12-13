<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('mainmenu');
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }
}
