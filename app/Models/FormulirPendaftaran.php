<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirPendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_lengkap',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'no_tlp_whatsapp',
        'jenis_kelamin',
        'agama',
        'asal_sekolah',
        'nama_orang_tua_wali',
    ];
}
