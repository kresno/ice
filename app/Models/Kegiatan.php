<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    protected $fillable = ['kode', 'nama', 'program_id'];

    public function SubKegiatan()
    {
        return $this->hasMany(SubKegiatan::class);
    }

    public function Program()
    {
        return $this->belongsTo(Program::class);
    }
}
