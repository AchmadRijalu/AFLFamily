<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('anggotas')->insert([
            'nama_lengkap' => 'Achmad Rijalu Arianindita',
            'nik' => '0706012010015',
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => Carbon::parse('2002-01-08'),
            'agama' => 'Islam',
            'Pendidikan' => 'SMA',
            'Jenis_pekerjaan' => 'Mahasiswa',
            'Jenis_kelamin' => 'Laki-laki',
            'Golongan_Darah' => 'B',
            'foto' => '',
            'kode_kk' => '1234567'
        ]);
        DB::table('anggotas')->insert([
            'nama_lengkap' => 'Jalu Satriyo Tomo',
            'nik' => '07060120100151',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => Carbon::parse('2002-01-01'),
            'agama' => 'Islam',
            'Pendidikan' => 'SMA',
            'Jenis_pekerjaan' => 'Mahasiswa',
            'Jenis_kelamin' => 'Laki-laki',
            'Golongan_Darah' => 'B',
            'foto' => '',
            'kode_kk' => '1234567'
        ]);
        DB::table('anggotas')->insert([
            'nama_lengkap' => 'Yulgar Smithzz',
            'nik' => '0706012010062',
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => Carbon::parse('2002-01-04'),
            'agama' => 'Kristen',
            'Pendidikan' => 'SMA',
            'Jenis_pekerjaan' => 'Mahasiswa',
            'Jenis_kelamin' => 'Laki-laki',
            'Golongan_Darah' => 'B',
            'foto' => '',
            'kode_kk' => '7654321'
        ]);
        DB::table('anggotas')->insert([
            'nama_lengkap' => 'Han Smithzz',
            'nik' => '070601201001',
            'tempat_lahir' => 'Solo',
            'tanggal_lahir' => Carbon::parse('2002-01-02'),
            'agama' => 'Hindu',
            'Pendidikan' => 'SMP',
            'Jenis_pekerjaan' => 'Mahasiswa',
            'Jenis_kelamin' => 'Laki-laki',
            'Golongan_Darah' => 'AB',
            'foto' => '',
            'kode_kk' => '7654321'
        ]);
        // DB::table('anggotas')->insert([
        //     'nama_lengkap' => 'Anon',
        //     'nik' => '0706012010012',
        //     'tempat_lahir' => 'Jakarta',
        //     'tanggal_lahir' => Carbon::parse('2002-01-02'),
        //     'agama' => 'Budha',
        //     'Pendidikan' => 'SMP',
        //     'Jenis_pekerjaan' => 'Mahasiswa',
        //     'Jenis_kelamin' => 'Laki-laki',
        //     'Golongan_Darah' => 'AB',
        //     'foto' => '',
        //     'kode_kk' => '500'
        // ]);
    }
}
