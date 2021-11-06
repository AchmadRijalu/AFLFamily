
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit your Card Family</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
    @include('layout.nav')
</head>
<body>

    <div class="container test2 editcontainer">
        <h1>Edit Card Family</h1>
            <form class="row g-3" method="POST" action="{{route('kartu.update', $card->no_kk)}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-md-12" style="width: 500px">
                    <label for="inputEmail4" class="form-label">No KK</label>
                  <input type="text" class="form-control" id="inputEmail4"  placeholder="Nomor KK" name="no_kk" value="{{$card->no_kk}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputEmail4" class="form-label">Kepala Keluarga</label>
                  <input type="text" class="form-control" id="inputEmail4"  placeholder="Nama" name="kepala_keluarga" value="{{$card->kepala_keluarga}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputPassword4" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Alamat" name="alamat" value="{{$card->alamat}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputAddress" class="form-label">Desa/Kelurahan</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Desa/Kelurahan" name="desakelurahan" value="{{$card->desakelurahan}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                    <label for="inputAddress" class="form-label">RT/RW</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="RT/RW" name="rtrw" value="{{$card->rtrw}}">
                  </div>
                <div class="col-12" style="width: 500px">
                  <label for="inputAddress2" class="form-label">Kecamatan</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Kecamatan" name="kecamatan" value="{{$card->kecamatan}}">
                </div>
                <div class="col-md-6" style="width: 500px">
                  <label for="inputCity" class="form-label">Kota</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="Kota" name="kabupatenkota" value="{{$card->kabupatenkota}}">
                </div>
                <div class="col-md-4" style="width: 500px">
                  <label for="inputState" class="form-label">Provinsi</label>
                  <input type="text" class="form-control" id="inputCity" placeholder="provinsi" name="provinsi" value="{{$card->provinsi}}">
                </div>
                <div class="col-md-2" style="width: 500px">
                  <label for="inputZip" class="form-label">Kode Pos</label>
                  <input type="text" class="form-control" id="inputZip" placeholder="Kode Pos" name="kode_pos" value="{{$card->kode_pos}}">
                </div>

                <div class="d-md-flex justify-content-center">
                  <button type="submit" class="btn btn-primary button-length btn-custom">Tambah</button>
                </div>
              </form>


    </div>
</body>
</html>

