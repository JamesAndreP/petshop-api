<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiController extends Controller
{
    public function index()
    {
        return view('hi');
    }
    public function zayin()
    {
        return view('HiZayin');
    }
}
