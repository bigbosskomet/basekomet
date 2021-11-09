<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranpklController extends Controller
{
    public function index()
    {
        return view('pendaftaranpkl/index');
    }
    public function tambahdatapkl()
    {
        return view('pendaftaranpkl/tambahdatapkl');
    }
}
