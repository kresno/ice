<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program';

    protected $fillable = ['kode', 'nama', 'bidang_urusan_id'];

    public function Kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function BidangUrusan()
    {
        return $this->belongsTo(BidangUrusan::class);
    }

}
