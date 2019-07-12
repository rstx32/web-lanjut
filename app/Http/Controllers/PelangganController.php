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

    public function tambah(){
        return view('pelanggan_tambah');
    }

    public function simpan(Request $request){
        $pesan = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
            'email' => ':attribute tidak valid',
        ];

        $this->validate($request,[
            'username' => 'required|min:4|max:4',
            'password' => 'required',
            'email' => 'required|email'
        ],$pesan);

        Pelanggan::create([
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ]);

        return redirect('/pelanggan');
    }

    public function edit($kode_plgn){
        $pelanggan = Pelanggan::find($kode_plgn);
        return view('pelanggan_edit',['pelanggan' => $pelanggan]);
    }

    public function update($kode_plgn, Request $request){
        $pesan = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
            'email' => ':attribute tidak valid',
        ];
        
        $this->validate($request,[
            'username' => 'required|min:4|max:4',
            'password' => 'required',
            'email' => 'required|email'
        ],$pesan);

        $pelanggan = Pelanggan::find($kode_plgn);
        $pelanggan->username = $request->username;
        $pelanggan->password = $request->password;
        $pelanggan->email = $request->email;
        $pelanggan->save();

        return redirect('/pelanggan');
    }

    public function hapus($kode_plgn){
        $pelanggan = Pelanggan::find($kode_plgn);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }
}
