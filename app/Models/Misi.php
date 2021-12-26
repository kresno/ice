<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $table = 'misi';

    protected $fillable = ['nama', 'urutan', 'visi_id'];

    public function tujuan()
    {
        return $this->hasMany(Tujuan::class);
    }

    public function visi()
    {
        return $this->belongsTo(Visi::class);
    }
}
