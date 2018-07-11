<?php

namespace App\Http\Controllers\Peminjam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamController extends Controller
{
    // Data Barang
    public function home() {
        $indicator = 'peminjam';
        return view('admin.peminjam.home', compact('indicator'));
    }
}
