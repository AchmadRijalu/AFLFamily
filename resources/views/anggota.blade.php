@extends('layout.main')

@section('form')

<h1>Data Diri</h1>
    <form class="row g-3" method="POST" action="{{route('anggota.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" name="nama_lengkap" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">NIK</label>
          <input type="text" class="form-control" id="inputPassword4"placeholder="NIK" name="nik" required>
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Tempat Lahir" name="tempat_lahir" required>
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="inputAddress" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
          </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Agama</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Agama" name="agama" required>
          </div>
        <div class="col-md-6">
          <label for="inputAddress2" class="form-label">Pendidikan</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Pendidikan" name="pendidikan" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Jenis Pekerjaan</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Jenis Pekerjaan" name="jenis_pekerjaan" required>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Jenis Kelamin</label>
          <select id="inputState" class="form-select" name="jenis_kelamin" required>
            <option selected="true" disabled = "disabled" hidden>Pilih</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Golongan Darah</label>
          <select id="inputState" class="form-select" name="golongan_darah" required>
            <option selected="true" disabled = "disabled" hidden>Pilih</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
          </select>
        </div>
        <div class="col-md-6">
            <label for="inputzip" class="form-label">Keluarga Dari:</label>
            <select name="kode_kk" id="" class="form-select" required>
                <option selected="true" disabled = "disabled" hidden>Pilih</option>
                @foreach ($kartu as $kart )
                    <option value="{{$kart->no_kk}}">{{$kart->kepala_keluarga}}</option>
                @endforeach
            </select>
        </div>
        <div class="w-50 col-md-2 mt-4">
            <label for="exampleFormControlFile1">Input Foto</label>
            <br>
            <input type="file" class="form-control bg-primary text-light" name="foto">
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
      <tr class="table-primary">
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">NIK</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Agama</th>
        <th scope="col">Pendidikan</th>
        <th scope="col">Jenis Pekerjaan</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Golongan Darah</th>
        <th scope="col">Foto</th>
        <th scope="col">
            NO KK
        </th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
        @php
            $index = 1;
        @endphp
        @foreach ($anggota as $member)
        <tr>
            <td>
            {{$index++}}
            </td>
            <td>
                {{$member->nama_lengkap}}
            </td>
            <td>
                {{$member->nik}}
            </td>
            <td>
                {{$member->tempat_lahir}}
            </td>
            <td>
                {{$member->tanggal_lahir}}
            </td>
            <td>
                {{$member->agama}}
            </td>
            <td>
                {{$member->pendidikan}}
            </td>
            <td>
                {{$member->jenis_pekerjaan}}
            </td>
            <td>
                {{$member->jenis_kelamin}}
            </td>
            <td>
                {{$member->golongan_darah}}
            </td>

            <td>
                {{-- {{$member->foto}} --}}
                @if ($member->foto)
                <a href="{{url('/download', $member->foto)}}">Download</a>
                @else
                N/A
                @endif

            </td>
            <TD>
                <a href="{{route('kartu.show' , $member->kartus->no_kk)}}">{{$member->kartus->no_kk}}</a>

            </TD>
            <td>
                <div class="bg-light d-md-flex gap-3">
                    <button type="submit" class="btn btn-primary" onclick="location.href='{{route('anggota.show', $member->id)}}'">Details</button>
                    <button type="submit" class="btn btn-warning" onclick="location.href='{{route('anggota.edit', $member->id)}}'">Edit</button>
                    <form action="{{route('anggota.destroy', $member->id) }}" method="POST">

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
