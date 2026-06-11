<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';

    protected $fillable = [
        'nama_gelar',
        'tahun_angkatan',
        'nim_3_digit',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'no_whatsapp',
        'provinsi',
        'kota_kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
        'institusi',
        'jabatan',
        'alamat_kerja',
        'bidang_keahlian',
        'hobi',
        'pesan_harapan',
        'foto'
    ];
}