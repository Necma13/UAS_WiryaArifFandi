<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Nilai;
use App\Models\Pembayaran;
use App\Models\Pelajaran;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    public function index()
    {
        $siswa = Auth::guard('siswa')->user();
        $nilai = Nilai::where('nisn', $siswa->nisn)->first();
        $pembayaran = Pembayaran::where('nisn', $siswa->nisn)->latest()->first();
        $pelajaran = Pelajaran::all();

        return view('home', compact('nilai', 'pembayaran', 'pelajaran'));
    }
}
