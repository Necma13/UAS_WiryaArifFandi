<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pelajaran;

class PelajaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Menampilkan daftar pelajaran untuk pengguna yang sedang login.
     */
    public function index()
    {
        $pelajarans = Pelajaran::all(); // Mengambil semua data pelajaran
        return view('pelajaran.index', compact('pelajarans'));
    }
}
