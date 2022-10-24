<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
    public function detailPeminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }
    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class);
    }
}
