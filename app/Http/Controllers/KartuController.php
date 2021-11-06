<?php

namespace App\Http\Controllers;

use App\Models\Kartu;
use Illuminate\Http\Request;

class KartuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kartu = Kartu::all();
        return view('kartu', ['title' => 'Data Kartu Keluarga'], compact('kartu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'no_kk' => 'numeric|min:100000000000000|max:10000000000000000',
            'kepala_keluarga' => 'required|min:2|max:50',
            'kode_pos' => 'numeric|min:4|max:5'
           ]);
        Kartu::create([
            'no_kk' => $request->no_kk,
            'kepala_keluarga' => $request->kepala_keluarga,
            'alamat' => $request->alamat,
            'desakelurahan' => $request->desakelurahan,
            'rtrw' => $request->rtrw ,
            'kecamatan' => $request->kecamatan,
            'kabupatenkota' => $request->kabupatenkota,
            'provinsi'=> $request->provinsi,
            'kode_pos'=> $request->kode_pos
        ]);
        return redirect(route('kartu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function show($kartu)
    {
        //
        $card = Kartu::findorFail($kartu);

        return view('kartudetails',['title' => 'Details Kartu Keluarga'] ,compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function edit( $kartu)
    {
        //
        $card = Kartu::findorFail($kartu);
        return view('editkartu', ['title' => 'Edit Kartu'] , compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kartu)
    {

        $this->validate($request, [
            'no_kk' => 'numeric|min:100000000000000|max:10000000000000000',
            'kepala_keluarga' => 'required|min:2|max:50',
            'kode_pos' => 'required numeric|min:4|max:5'
           ]);
        $card = Kartu::findorfail($kartu);
        $card->update([
            'no_kk' => $request->no_kk,
            'kepala_keluarga' => $request->kepala_keluarga,
            'alamat' => $request->alamat,
            'desakelurahan' => $request->desakelurahan,
            'rtrw' => $request->rtrw ,
            'kecamatan' => $request->kecamatan,
            'kabupatenkota' => $request->kabupatenkota,
            'provinsi'=> $request->provinsi,
            'kode_pos'=> $request->kode_pos
        ]);

        return redirect(route('kartu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kartu)
    {
        //
        $kartus = Kartu::findorFail($kartu);

        $kartus->delete();

        return redirect(route('kartu.index'));
    }
}
