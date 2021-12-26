<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAsmas extends Model
{
    use HasFactory;

    protected $table = 'data_asmas';

    protected $fillable = ['tahun', 'kode', 'tanggal', 'pengusul', 'profil', 'urusan', 'usulan', 'permasalahan', 'alamat', 'kecamatan', 'desa', 'tujuan_usul', 'pd_awal'];

    protected $hidden = ['created_at', 'updated_at'];
    
}
