<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;

class CobaController extends Controller{
    
    public function index () {
        $user = User::with('projek')->get();
        $kategori = Kategori::with(['artikel', 'artikel.komentar'])->get();
        return view('test', compact('user', 'kategori'));
    }

}
