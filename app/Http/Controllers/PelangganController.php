<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();
        return view('pelanggan',['pelanggan' => $pelanggan]);
    }
}
