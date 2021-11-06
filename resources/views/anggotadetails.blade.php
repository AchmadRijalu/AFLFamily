<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
    @include('layout.nav')
</head>
<body>

    <div class="card mt-2" style="width: 18rem;">
        <div class="d-flex justify-content-center mt-4 bg-danger text-light" >
            @if ($anggota->foto)
            <img src="/assets/{{$anggota->foto}}" class="card-img-top" alt="..." class="full-width">
            @else
            <h2 class="">
                NO PHOTO
            </h2>
            @endif
        </div>
        <div class="card-body">
          <h4 class="card-title text-center mb-3">
              {{$anggota->nama_lengkap}}
          </h4>
          <h5 class="card-title text-center mb-2">
            {{$anggota->jenis_kelamin}}
          </h5>
          <h6 class="card-title text-center mb-2">
            {{$anggota->jenis_pekerjaan}}
          </h6>
          <p class="card-text text-center"> NIK : {{$anggota->nik}}</p>

          <P class="card-text text-center">
            Tempat Lahir : {{$anggota->tempat_lahir}}
          </P>
          <p class="card-text text-center">
            Tanggal Lahir : {{$anggota->tanggal_lahir}}
          </p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$anggota->agama}}</li>
          <li class="list-group-item">{{$anggota->pendidikan}}</li>
          <li class="list-group-item">Golongan Darah: {{$anggota->golongan_darah}}</li>
        </ul>
        <div class="card-body">
          <p>
              KK : <Strong>{{$anggota->kode_kk}}</Strong>
          </p>

        </div>
      </div>

</body>
</html>
