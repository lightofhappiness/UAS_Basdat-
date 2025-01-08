<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WargaModel extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'warga';  // Nama tabel (jika berbeda dengan nama model, bisa diubah)

    // Menentukan atribut yang bisa diisi secara mass-assignment
    protected $fillable = [
        'nama', 'tanggal_lahir', 'jenis_kelamin', 'alamat'
    ];

    // Relasi dengan Imunisasi
    public function imunisasies()
    {
        return $this->hasMany(ImunisasiModel::class);  // Seorang warga bisa memiliki banyak imunisasi
    }

    // Relasi dengan Laporan Kesehatan
    public function laporanKesehatans()
    {
        return $this->hasMany(LaporanKesehatanModel::class);  // Seorang warga bisa memiliki banyak laporan kesehatan
    }
}
