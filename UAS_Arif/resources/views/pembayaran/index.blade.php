@extends('layouts.master')
@section('title', 'Daftar Pembayaran')
@section('judul', 'Daftar Pembayaran')
@section('nama', 'Hananan Academy')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5">
    <h2>Daftar Pembayaran</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No. Faktur</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah Bayar</th>
                <th>Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembayarans as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->nofak }}</td>
                    <td>{{ $pembayaran->tgl_b->format('d-m-Y H:i') }}</td>
                    <td>Rp {{ number_format($pembayaran->jum_b, 0, ',', '.') }}</td>
                    <td>
                        @if ($pembayaran->bukti_b)
                            <a href="{{ asset('storage/bukti/'.$pembayaran->bukti_b) }}" target="_blank">Lihat Bukti</a>
                        @else
                            Tidak ada
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
