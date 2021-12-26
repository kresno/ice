<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;
    protected $table    = 'tujuan';
    protected $fillable = ['nama', 'misi_id'];
    protected $hidden   = ['created_at', 'updated_at'];

    public function Misi()
    {
        return $this->belongsTo(Misi::class);
    }
}
