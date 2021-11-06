@extends('layout.main')

@section('form')
<div class="jumbotron">
    <h1 class="display-4">Welcome to FamsCard!</h1>
    <p class="lead">FamsCard merupakan wadah penyimpanan data Kartu Keluarga yang bersifat sangat mudah digunakan.</p>
    <hr class="my-4">
    <p>&#169; CopyRight by Achmad Rijalu A.</p>
    <a class="btn btn-primary btn-lg" href="{{route('anggota.index')}}" role="button">Get Started</a>
  </div>
@endsection
