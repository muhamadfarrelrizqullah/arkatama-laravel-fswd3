<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() 
    {
        
        // session()->put('nama', 'Aan');
        // session()->put('alamat', 'malang');
        // session()->forget('alamat');

        // $sesi = session()->has('nama');

        // dd($sesi);

        $buku = Buku::with('penerbit')->get();
        return view('buku', compact('buku'));
    }
}
