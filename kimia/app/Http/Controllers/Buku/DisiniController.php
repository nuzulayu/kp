<?php

namespace App\Http\Controllers\Buku;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DisiniController extends Controller
{
    public function create() {
        $indicator = 'disini';
        return view('admin.buku.disini.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Buku\BukuController@all')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit() {
        $indicator = 'disini';
        return view('admin.buku.disini.edit',compact('indicator'));
    }


    public function edit_submit() {
        return redirect()->action('Buku\BukuController@all')->withSuccess('Berhasil');
        // return route->back();
    }

    public function delete() {
        return redirect()->action('Buku\BukuController@all')->withError('Data Barang Deleted');
        // return route->back();
    }
}
