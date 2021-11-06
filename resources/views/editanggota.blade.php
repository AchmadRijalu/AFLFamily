<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Keluarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
    @include('layout.nav')
</head>
<body>

    <div class="container test2 editcontainer ">
        <h1>Edit Data Anggota</h1>
            <form class="row g-3" method="POST" action="{{route('anggota.update', $member->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-md-12" style="width: 500px">
                    <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputEmail4"  placeholder="Nama Lengkap" name="nama_lengkap" value="{{$member->nama_lengkap}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputEmail4" class="form-label">nik</label>
                  <input type="text" class="form-control" id="inputEmail4"  placeholder="NIK" name="nik" value="{{$member->nik}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputPassword4" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Tempat Lahir" name="tempat_lahir" value="{{$member->tempat_lahir}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputAddress" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="inputAddress" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{$member->tanggal_lahir}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                    <label for="inputAddress" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Agama" name="agama" value="{{$member->agama}}">
                  </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputAddress2" class="form-label">pendidikan</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Pendidikan" name="pendidikan" value="{{$member->pendidikan}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputCity" class="form-label">jenis pekerjaan</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="Kota" name="jenis_pekerjaan" value="{{$member->jenis_pekerjaan}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputState" class="form-label">jenis Kelamin</label>
                  <select id="inputState" class="form-select" name="jenis_kelamin">
                    {{-- <option selected value="{{$member->jenis_kelamin}}">Pilih</option> --}}
                    <option value="Laki-Laki" {{ $member->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ $member->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
                </div>
                <div class="col-md-6" style="width: 400px">
                    <label for="inputZip" class="form-label">Golongan Darah</label>
                    <select id="inputState" class="form-select" name="golongan_darah">

                      <option value="A"{{ $member->golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                      <option value="B" {{ $member->golongan_darah == 'B' ? 'selected' : '' }}>B</option>
                      <option value="AB" {{ $member->golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>
                      <option value="O" {{ $member->golongan_darah == 'O' ? 'selected' : '' }}>O</option>
                    </select>
                </div>
                <div class="col-md-12 mt-4 form-group" style="width: 400px">
                    <label for="exampleFormControlFile1">Input Foto</label>
                    <br>
                    <input type="file" class="form-control bg-primary text-light" name="foto" value="Upload Publication" value="{{asset('assets/1636010539.pdf')}}">
                </div>
                <div class="col-md-12 mt-4 form-group">
                    <label for="inputzip" class="form-label">Keluarga Dari:</label>
                     <select name="kode_kk" id="" class="form-select">
                        <option selected="true" disabled = "disabled" hidden>Pilih</option>
                @foreach ($kartu as $kart )
                    <option value="{{$kart->no_kk}}">{{$kart->kepala_keluarga}}</option>
                @endforeach
            </select>
                </div>

                <div class="d-md-flex justify-content-center mt-4">
                  <button type="submit" class="btn btn-primary button-length btn-custom">Tambah</button>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                                            <li>
                                                {{$error}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                    @endif
              </form>


    </div>
</body>
</html>
