@extends('layouts.master')
@section('title', 'Nilai Siswa')
@section('judul', 'Nilai Siswa')
@section('nama', 'Hananan Academy')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5">
    <h2>Nilai Anda</h2>
    @if($nilais)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No. Nilai</th>
                    <th>NISN</th>
                    <th>Nilai Quiz</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Ujian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $nilais->no_nilai }}</td>
                    <td>{{ $nilais->nisn }}</td>
                    <td>{{ $nilais->n_quiz }}</td>
                    <td>{{ $nilais->n_tugas }}</td>
                    <td>{{ $nilais->n_ujian }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <p class="text-center">Belum ada data nilai.</p>
    @endif
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
