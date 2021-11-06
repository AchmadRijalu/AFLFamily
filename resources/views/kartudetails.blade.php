<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Keluarga Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
</head>
<body>
@include('layout.nav')

<div class="container bg-light mt-3 table-responsive">
    <div class="">
    <h1>
        Kartu Keluarga
    </h1>
    <h2 class="d-flex justify-content-center">
        No : {{$card->no_kk}}
    </h2>
    </div>
<div class="row mb-3">
    <div class="col-md-6 bg">
        <ul class="text-primary d-flex flex-column list-unstyled">
            <li class="font">
                Nama Kepala Keluarga :  <strong> {{$card->kepala_keluarga}}</strong>
            </li>
            <li>
                Alamat : <strong> {{$card->alamat}}</strong>
            </li>
            <li>
                RT/RW : <strong> {{$card->rtrw}}</strong>
            </li>
            <li>
                Kode Pos : <strong> {{$card->kode_pos}}</strong>
            </li>
        </ul>
    </div>
    <div class="col-md-6 ">
        <ul class="text-primary d-flex flex-column list-unstyled">
            <li>
                Desa/kelurahan : <strong> {{$card->desakelurahan}}</strong>
            </li>
            <li>
                Kecamatan : <strong> {{$card->kecamatan}}</strong>
            </li>
            <li>
                Kabupaten/Kota : <strong> {{$card->kabupatenkota}}</strong>
            </li>
            <li>
                Provinsi : <strong> {{$card->provinsi}}</strong>
            </li>
        </ul>
    </div>

</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">NIK</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col"> Agama</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Jenis Pekerjaan</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Golongan Darah</th>

          </tr>
        </thead>
        <tbody>
            @php
                $index = 1;
            @endphp
            @foreach ($card->anggotas as $cardanggotas)
                <tr>
                    <td>
                        {{$index++}}
                    </td>
                    <td>
                        {{$cardanggotas->nama_lengkap}}
                    </td>
                    <td>
                        {{$cardanggotas->nik}}
                    </td>
                    <td>
                        {{$cardanggotas->tempat_lahir}}
                    </td>
                    <td>
                        {{$cardanggotas->tanggal_lahir}}
                    </td>
                    <td>
                        {{$cardanggotas->agama}}
                    </td>
                    <td>
                        {{$cardanggotas->pendidikan}}
                    </td>
                    <td>
                        {{$cardanggotas->jenis_Pekerjaan}}
                    </td>
                    <td>
                        {{$cardanggotas->jenis_kelamin}}
                    </td>
                    <td>
                        {{$cardanggotas->golongan_darah}}
                    </td>
                </tr>
            @endforeach
      </table>

</div>

</body>
</html>
