<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $sis = Siswa::all();
        return view('siswa.index', compact('nomor', 'sis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn',
            'nama' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'jjg' => 'required',
            'hp' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $sis = new Siswa;
        $sis->nisn = $request->nisn;
        $sis->nama = $request->nama;
        $sis->tgl = $request->tgl;
        $sis->alamat = $request->alamat;
        $sis->jjg = $request->jjg;
        $sis->hp = $request->hp;

        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->foto->getClientOriginalName();
            $request->foto->storeAs('foto', $fileName);
            $sis->foto = $fileName;
        }

        $sis->save();

        return redirect('/siswa/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nisn)
    {
        $siswa = Siswa::where('nisn', $nisn)->first();
        if ($siswa) {
            return view('siswa.show', compact('siswa'));
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nisn)
    {
        $sis = Siswa::where('nisn', $nisn)->first();
        if ($sis) {
            return view('siswa.edit', compact('sis'));
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nisn)
    {
        $request->validate([
            'nama' => 'required',
            'tgl' => 'required|date',
            'alamat' => 'required',
            'jjg' => 'required',
            'hp' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $sis = Siswa::where('nisn', $nisn)->first();
        if ($sis) {
            $sis->nama = $request->nama;
            $sis->tgl = $request->tgl;
            $sis->alamat = $request->alamat;
            $sis->jjg = $request->jjg;
            $sis->hp = $request->hp;

            if ($request->hasFile('foto')) {
                $fileName = time() . '_' . $request->foto->getClientOriginalName();
                $request->foto->storeAs('foto', $fileName);
                $sis->foto = $fileName;
            }

            $sis->save();
            return redirect('/siswa/');
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nisn)
    {
        $sis = Siswa::where('nisn', $nisn)->first();
        if ($sis) {
            $sis->delete();
            return redirect('/siswa/');
        } else {
            return redirect('/siswa/')->withErrors('Data tidak ditemukan');
        }
    }
}
