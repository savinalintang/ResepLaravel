<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Resep as AppResep;

class ResepController extends Controller
{public function index(){
    return AppResep::all();
}

public function create(request $request){
    $resep = new AppResep();
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
    $resep = AppResep::find($id);
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
    $resep = AppResep::find($id);
    $resep->delete();
    return "Data Telah Terhapus";
}
}
