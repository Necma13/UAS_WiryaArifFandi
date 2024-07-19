@extends('layouts.master')
@section('title','Dashboard')
@section('judul','Dashboard')
@section('nama','Hananan Academy')
@section('merk','Hananan Academy')
@section('judul','Dashboard')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Profile Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Profil Siswa
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('foto/' . Auth::guard('siswa')->user()->foto) }}" class="img-fluid rounded-circle mb-3" alt="Profile Picture">
                        <h5>{{ Auth::guard('siswa')->user()->nama }}</h5>
                        <p>{{ Auth::guard('siswa')->user()->jjg }}</p>
                        <p>{{ Auth::guard('siswa')->user()->alamat }}</p>
                        <p>{{ Auth::guard('siswa')->user()->hp }}</p>
                    </div>
                </div>
            </div>

            <!-- Academic Section -->
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        Nilai Akademik
                    </div>
                    <div class="card-body">
                        @if($nilai)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Quiz</th>
                                        <th>Tugas</th>
                                        <th>Ujian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $nilai->n_quiz }}</td>
                                        <td>{{ $nilai->n_tugas }}</td>
                                        <td>{{ $nilai->n_ujian }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <p>Belum ada data nilai.</p>
                        @endif
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-warning text-white">
                        Pembayaran Terakhir
                    </div>
                    <div class="card-body">
                        @if($pembayaran)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Jumlah</th>
                                        <th>Bukti Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $pembayaran->tgl_b }}</td>
                                        <td>{{ $pembayaran->jum_b }}</td>
                                        <td><a href="{{ asset('bukti_b/' . $pembayaran->bukti_b) }}" target="_blank">Lihat Bukti</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <p>Belum ada data pembayaran.</p>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-info text-white">
                        Mata Pelajaran
                    </div>
                    <div class="card-body">
                        @if($pelajaran)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kode Pelajaran</th>
                                        <th>Nama Pelajaran</th>
                                        <th>Jumlah Sesi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pelajaran as $pel)
                                        <tr>
                                            <td>{{ $pel->kd_pel }}</td>
                                            <td>{{ $pel->mapel }}</td>
                                            <td>{{ $pel->jum_sesi }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Belum ada data pelajaran.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
