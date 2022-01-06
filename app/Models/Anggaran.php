<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;

    protected $table = 'anggaran';
    
    protected $fillable = ['tahun', 'opd_id', 'subkegiatan_id', 'pagu', 'label_spm', 'label_proyekprioritas', 'label_jabsel', 'label_iku'];
    
    protected $hidden   =['created_at', 'updated_at'];

}
