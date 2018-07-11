<?php

namespace App\Http\Controllers\Buku;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    // Data Barang
    public function all() {
        $indicator = 'all';
        return view('admin.buku.home', compact('indicator'));
    }

    // Kategori Barang
    public function disini() {
        $indicator = 'disini';
        return view('admin.buku.disini.home', compact('indicator'));
    }

    // Barang Masuk
    public function disana() {
        $indicator = 'disana';
        return view('admin.buku.disana.home', compact('indicator'));
    }

}
