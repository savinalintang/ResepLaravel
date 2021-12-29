<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreResepRequest;
use App\Http\Resources\ResepResource;
use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResepResource::collection(Resep::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResepRequest $request)
    {
        $resep = Resep::create($request->validated());
        return $resep;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Resep $resep)
    {
        return new ResepResource($resep);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreResepRequest $request, Resep $resep)
    {
        $resep->update($request->validated());
        return new ResepResource($resep);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resep $resep)
    {
        $resep->delete();

        return 'Data berhasil dihapus';
    }
}
