@extends('layout.main')

@section('form')
<h1>Kartu Keluarga</h1>
    <form class="row g-3" method="POST" action="{{route('kartu.store')}}">
        {{ csrf_field() }}
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">No KK</label>
          <input type="text" class="form-control" id="inputEmail4"  placeholder="Nomor KK" name="no_kk" required>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Kepala Keluarga</label>
          <input type="text" class="form-control" id="inputEmail4"  placeholder="Nama" name="kepala_keluarga" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Alamat" name="alamat" required>
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Desa/Kelurahan</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Desa/Kelurahan" name="desakelurahan" required>
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">RT/RW</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="RT/RW" name="rtrw" required>
          </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Kecamatan</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Kecamatan" name="kecamatan" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Kota</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Kota" name="kabupatenkota" required>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Provinsi</label>
          <input type="text" class="form-control" id="inputCity" placeholder="provinsi" name="provinsi" required>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Kode Pos</label>
          <input type="text" class="form-control" id="inputZip" placeholder="Kode Pos" name="kode_pos" required>
        </div>
        <div class="col-12">

        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Tambah</button>
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
@endsection

@section('table')
    <table class="table table-striped">
        <thead>
            @php
                $index = 1;
            @endphp
          <tr class="table-primary">
              <th scope="col">
                  No
              </th>
            <th scope="col">Kode KK</th>
            <th scope="col">Kepala Keluarga</th>
            <th scope="col">Alamat</th>
            <th scope="col">Desa/Kelurahan</th>
            <th scope="col">RT/RW</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kota</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kode Pos</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($kartu as $card )
            <tr>
                <th>
                    {{$index++}}
                </th>
                <td>
                    {{$card->no_kk}}
                </td>
                <td>
                    {{$card->kepala_keluarga}}
                </td>
                <td>
                    {{$card->alamat}}
                </td>
                <td>
                    {{$card->desakelurahan}}
                </td>
                <td>
                    {{$card->rtrw}}
                </td>
                <td>
                    {{$card->kecamatan}}
                </td>
                <td>
                    {{$card->kabupatenkota}}
                </td>
                <td>
                    {{$card->provinsi}}
                </td>
                <td>
                    {{$card->kode_pos}}
                </td>
                <td>
                    <div class="d-md-flex gap-2">
                        <button type="submit" class="btn btn-primary" onclick="location.href='{{route('kartu.show', $card->no_kk)}}'">Details</button>
                        <button type="submit" class="btn btn-warning" onclick="location.href='{{route('kartu.edit', $card->no_kk)}}'">Edit</button>
                        <form action="{{route('kartu.destroy', $card->no_kk) }}" method="POST">

                            {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>
    @endsection








