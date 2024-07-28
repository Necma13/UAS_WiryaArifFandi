@extends('layouts.master')
@section('title', 'Profil Siswa')
@section('judul', 'Profil Siswa')
@section('nama', 'Hananan Academy')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('storage/foto/'.$siswa->foto) }}" class="card-img-top" alt="Foto Siswa">
                <div class="card-body">
                    <h5 class="card-title">{{ $siswa->nama }}</h5>
                    <p class="card-text">NISN: {{ $siswa->nisn }}</p>
                    <p class="card-text">Tanggal Lahir: {{ $siswa->tgl }}</p>
                    <p class="card-text">Alamat: {{ $siswa->alamat }}</p>
                    <p class="card-text">Jenjang Pendidikan: {{ $siswa->jjg }}</p>
                    <p class="card-text">Nomor HP: {{ $siswa->hp }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
