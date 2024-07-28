<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Menampilkan daftar nilai untuk pengguna yang sedang login.
     */
    public function index()
    {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $nilais = Nilai::where('nisn', $nisn)->first(); // Mengambil nilai hanya untuk satu siswa

        if ($nilais) {
            return view('nilai.index', compact('nilais'));
        } else {
            return redirect('/')->withErrors('Data nilai tidak ditemukan');
        }
    }
}
