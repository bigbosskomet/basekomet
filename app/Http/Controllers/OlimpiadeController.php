<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlimpiadeController extends Controller
{
    public function index()
    {
        return view('olimpiade/index');
    }
}
