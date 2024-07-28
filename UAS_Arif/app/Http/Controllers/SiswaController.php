<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Menampilkan profil pengguna yang sedang login.
     */
    public function index()
    {
        $siswa = Auth::guard('siswa')->user();
        return view('siswa.index', compact('siswa'));
    }
}
