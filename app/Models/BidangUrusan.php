<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUrusan extends Model
{
    use HasFactory;
    
    protected $table = 'bidang_urusan';

    protected $fillable = ['kode', 'nama', 'urusan_id'];

    public function Program()
    {
        return $this->hasMany(Program::class);
    }

    public function Urusan()
    {
        return $this->belongsTo(Urusan::class);
    }
}
