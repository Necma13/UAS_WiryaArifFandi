<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Menampilkan daftar pembayaran untuk pengguna yang sedang login.
     */
    public function index()
    {
        $nisn = Auth::guard('siswa')->user()->nisn;
        $pembayarans = Pembayaran::where('nisn', $nisn)->get();
        return view('pembayaran.index', compact('pembayarans'));
    }
}
