<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory;

    // Tentukan primary key
    protected $primaryKey = 'nisn';

    // Tentukan bahwa primary key bukan auto-incrementing
    public $incrementing = false;

    // Tentukan tipe primary key
    protected $keyType = 'string';

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['nisn', 'nama', 'tgl', 'alamat', 'jjg', 'hp', 'foto', 'password'];
}
