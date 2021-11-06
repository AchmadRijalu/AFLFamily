<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    protected $table = 'kartus';
    protected $fillable = ['no_kk','kepala_keluarga','alamat','rtrw', 'kode_pos','desakelurahan','kecamatan','kabupatenkota','provinsi'];
    protected $primaryKey = 'no_kk';


    public function anggotas(){
        return $this->hasMany(Anggota::class, 'kode_kk', 'no_kk');
    }
}
