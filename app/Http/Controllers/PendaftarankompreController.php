<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftarankompreController extends Controller
{
    public function index()
    {
        return view('pendaftarankompre/index');
    }
}
