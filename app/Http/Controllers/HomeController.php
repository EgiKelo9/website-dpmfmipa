<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('webpage.home');
    }

    public function fungsio()
    {
        return view('webpage.fungsionaris');
    }

    public function proker()
    {
        return view('webpage.programKerja');
    }

    public function raker()
    {
        return view('webpage.rakergrab');
    }
}
