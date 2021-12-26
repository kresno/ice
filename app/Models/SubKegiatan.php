<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    use HasFactory;

    protected $table = 'sub_kegiatan';

    protected $fillable = ['kode', 'nama', 'kegiatan_id'];

    public function Kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
