@extends('layouts.master')
@section('title', 'Daftar Pelajaran')
@section('judul', 'Daftar Pelajaran')
@section('nama', 'Hananan Academy')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5">
    <h2>Daftar Pelajaran</h2>
    @if($pelajarans->isNotEmpty())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Pelajaran</th>
                    <th>Nama Pelajaran</th>
                    <th>Jumlah Sesi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelajarans as $pelajaran)
                    <tr>
                        <td>{{ $pelajaran->kd_pel }}</td>
                        <td>{{ $pelajaran->mapel }}</td>
                        <td>{{ $pelajaran->jum_sesi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">Belum ada data pelajaran.</p>
    @endif
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
