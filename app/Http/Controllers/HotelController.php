<?php

namespace App\Http\Controllers;

use App\Models\Hotel;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hoteis = Hotel::all();
        return view('hoteis')->with('hoteis', $hoteis);
    }
}
