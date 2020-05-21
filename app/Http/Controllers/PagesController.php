<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function nasabah()
    {
        return view('nasabah');
    }
    public function gudang()
    {
        return view('gudang');
    }
    public function marketing()
    {
        return view('marketing');
    }
}
