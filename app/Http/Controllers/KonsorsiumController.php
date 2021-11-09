<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsorsiumController extends Controller
{
    public function index()
    {
        return view('konsorsium/index');
    }
}
