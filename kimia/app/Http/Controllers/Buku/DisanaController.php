<?php

namespace App\Http\Controllers\Buku;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DianaiController extends Controller
{
    public function create() {
        $indicator = 'disana';
        return view('admin.buku.disana.create',compact('indicator'));
    }

    public function create_submit() {
        return redirect()->action('Buku\BukuController@all')->withSuccess('Berhasil');
        // return route->back();
    }

    public function edit() {
        $indicator = 'disana';
        return view('admin.buku.disana.edit',compact('indicator'));
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
