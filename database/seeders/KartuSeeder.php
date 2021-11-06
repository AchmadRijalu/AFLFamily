<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KartuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kartus')->insert([
            'no_kk' => '7654321',
            'kepala_keluarga' => 'Smithzz',
            'alamat' => 'Wiyung',
            'RTRW' =>  '103/202',
            'kode_pos' => '60233',
            'desakelurahan' => 'Babatan',
            'kecamatan' => 'Babatan',
            'kabupatenkota' => 'Surabaya',
            'Provinsi' => 'Jawa Timur',

        ]);
        DB::table('kartus')->insert([
            'no_kk' => '1234567',
            'kepala_keluarga' => 'Achmad Rijalu Arianindita',
            'alamat' => 'Ketintang',
            'RTRW' =>  '101/202',
            'kode_pos' => '60231',
            'desakelurahan' => 'Ketintang',
            'kecamatan' => 'Gayungan',
            'kabupatenkota' => 'Surabaya',
            'Provinsi' => 'Jawa Timur',

        ]);
    }
}
