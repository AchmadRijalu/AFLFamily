<?php

namespace App\Http\Controllers;

use App\Models\Kartu;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
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
        $anggota = Anggota::all();
        return view('anggota' ,['title' => 'Data Warga'], compact('anggota', 'kartu'));
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

        // $file = $request->foto;
        if($request->foto === null){
            // $filename = time().'.'.$request->foto->getClientOriginalExtension();
            $this->validate($request, [
             'nama_lengkap' => 'required|min:2|max:50',
             'nik' => 'numeric|min:100000000000000|max:10000000000000000',
                'foto' => "mimes:pdf,jpeg|max:10000"
            ]);
            // $request->foto->move('assets', $filename);
            Anggota::create(
                [
                'nama_lengkap' =>$request->nama_lengkap,
                'nik'=>$request->nik,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'agama'=>$request->agama,
                'pendidikan'=>$request->pendidikan,
                'jenis_pekerjaan'=>$request->jenis_pekerjaan,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'golongan_darah'=>$request->golongan_darah,
                'foto' =>$request->foto,
                'kode_kk' => $request->kode_kk
            ]);
        }
        else if($request->foto !=null){
            $filename = time().'.'.$request->foto->getClientOriginalExtension();
            $this->validate($request, [
                'nama_lengkap' => 'required|min:2|max:50',
                'nik' => 'numeric|min:100000000000000|max:10000000000000000',
                   'foto' => "mimes:pdf,jpeg|max:10000"
               ]);
            $request->foto->move('assets', $filename);
            Anggota::create(
                [
                'nama_lengkap' =>$request->nama_lengkap,
                'nik'=>$request->nik,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'agama'=>$request->agama,
                'pendidikan'=>$request->pendidikan,
                'jenis_pekerjaan'=>$request->jenis_pekerjaan,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'golongan_darah'=>$request->golongan_darah,
                'foto' =>$filename,
                'kode_kk' => $request->kode_kk
            ]);
        }

        return redirect(route('anggota.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show($anggota)
    {
        //
        $anggota = Anggota::findorFail($anggota);

        return view('anggotadetails', ['title' => 'Details Anggota'] ,compact('anggota'));
    }
    public function download(Request $request , $foto){


        return response()->download(public_path('assets/'.$foto));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit( $anggota)
    {
        //
        $member = Anggota::findorFail($anggota);
        $kartu = Kartu::all();
        return view('editanggota', ['title' => 'Edit Data Anggota Keluarga'], compact('member' , 'kartu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $anggota)
    {
        //
        // Storage::disk('local')->delete('public/assets/'.$request->anggota);



        if($request->foto === null){
            // $filename = time().'.'.$request->foto->getClientOriginalExtension();
            $this->validate($request, [
                'nama_lengkap' => 'required|min:2|max:50',
                'nik' => 'numeric|min:100000000000000|max:10000000000000000',
                   'foto' => "mimes:pdf,jpeg|max:10000",
                   'kode_kk' => 'required'
               ]);
            // $request->foto->move('assets', $filename);

            $member = Anggota::findorFail($anggota);
            $member->update(
                [
                'nama_lengkap' =>$request->nama_lengkap,
                'nik'=>$request->nik,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'agama'=>$request->agama,
                'pendidikan'=>$request->pendidikan,
                'jenis_pekerjaan'=>$request->jenis_pekerjaan,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'golongan_darah'=>$request->golongan_darah,
                'foto' =>$request->oldfoto,
                'kode_kk' => $request->kode_kk
            ]);
        }

        else if($request->foto !=null){
            $filename = time().'.'.$request->foto->getClientOriginalExtension();
            $this->validate($request, [
                'nama_lengkap' => 'required|min:2|max:50',
                'nik' => 'numeric|min:100000000000000|max:10000000000000000',
                   'foto' => "mimes:pdf,jpeg|max:10000"
               ]);

            if($request->oldfoto != null){
                Storage::delete($request->oldfoto);
            }
            $request->foto->move('assets', $filename);



            $member = Anggota::findorFail($anggota);
            $member->update(
                [
                'nama_lengkap' =>$request->nama_lengkap,
                'nik'=>$request->nik,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'agama'=>$request->agama,
                'pendidikan'=>$request->pendidikan,
                'jenis_pekerjaan'=>$request->jenis_pekerjaan,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'golongan_darah'=>$request->golongan_darah,
                'foto' =>$filename,
                'kode_kk' => $request->kode_kk
            ]);
        }
        return redirect(route('anggota.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy( $anggota)
    {
        //
        $member = Anggota::findorFail($anggota);

        $member->delete();

        return redirect(route('anggota.index'));

    }
}
