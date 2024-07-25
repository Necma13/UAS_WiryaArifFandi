@extends('layouts.master')
@section('title','Data Siswa')
@section('judul','Data siswa')
@section('nama','Hananan Academy')
@section('content')
 <!-- Modal Detail-->
 @forelse ($sis as $item)
 <div class="modal fade" id="detail{{$item->nisn}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$item->nama}}</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table">

                <tbody>
                        <tr>
                            <td>NISN</td>
                            <th scope="row">{{$item->nisn}}</th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <th scope="row">{{$item->nama}}</th>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <th scope="row">{{$item->tgl}}</th>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <th scope="row">{{$item->alamat}}</th>
                        </tr>
                        <tr>
                            <td>Jenjang Pendidikan</td>
                            <th scope="row">{{$item->jjg}}</th>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <th scope="row">{{$item->hp}}</th>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <th scope="row"><img src="{{ asset('/foto/'.$item->foto) }}" width="100" alt=""></th>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

        </div>
    </div>
    </div>
</div>
@endsection
