<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPokir extends Model
{
    use HasFactory;

    protected $table = 'data_pokir';

    protected $fillable = ['tahun', 'kode', 'tanggal', 'pengusul', 'fraksi', 'urusan', 'usulan', 'permasalahan', 'alamat', 'kecamatan', 'desa', 'koefisien', 'pd_awal', 'pd_akhir', 'rekom_setwan', 'rekom_mitra_bappeda', 'kategori', 'rekom_pd', 'rekom_bappeda', 'status'];

    protected $hidden = ['created_at', 'updated_at'];


    public function scopeSearch($query, $search)
    {
        $query->where('pengusul', 'like', '%'.$search.'%');
    }
    
}
