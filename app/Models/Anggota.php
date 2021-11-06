<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;


    protected $table = 'anggotas';
    protected $fillable = ['nama_lengkap', 'nik', 'tempat_lahir', 'tanggal_lahir', 'agama', 'pendidikan' , 'jenis_pekerjaan' , 'jenis_kelamin'
                            ,'golongan_darah', 'foto', 'kode_kk'];

    // protected $primarykey = ['nama_lengkap'];

    public function kartus(){
        return $this->belongsTo(Kartu::class, 'kode_kk', 'no_kk');
    }
}
