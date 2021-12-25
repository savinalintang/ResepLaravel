<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;


class ResepController extends Controller
{public function index(){
    return Resep::all();
}

public function create(request $request){
    $resep = new Resep();
    $resep->judul = $request->judul;
    $resep->penulis = $request->penulis;
    $resep->deskripsi = $request->deskripsi;
    $resep->waktuMasak = $request->waktuMasak;
    $resep->penyajian = $request->penyajian;
    $resep->komposisi = $request->komposisi;
    $resep->save();

    return "Data Tersimpan";
}

public function update(request $request, $id){
    $judul = $request->judul;
    $penulis = $request->penulis;
    $deskripsi = $request->deskripsi;
    $waktuMasak = $request->waktuMasak;
    $penyajian = $request->penyajian;
    $komposisi = $request->komposisi;
    $resep = Resep::find($id);
    $resep->judul = $judul;
    $resep->penulis = $penulis;
    $resep->deskripsi = $deskripsi;
    $resep->waktuMasak = $waktuMasak;
    $resep->penyajian = $penyajian;
    $resep->komposisi = $komposisi;
    $resep->save();

    return "Data Telah Diupdate";
}


public function delete($id){
    $resep = Resep::find($id);
    $resep->delete();
    return "Data Telah Terhapus";
}
}
