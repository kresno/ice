<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;

    protected $table = 'opd';
    
    protected $fillable = ['kode', 'nama', 'bidang_urusan_satu', 'bidang_urusan_dua', 'bidang_urusan_tiga'];
    
    protected $hidden   =['created_at', 'updated_at'];

    public function anggaran()
    {
        return $this->hasMany(Anggaran::class);
    }
}
