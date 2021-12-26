<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSpm extends Model
{
    use HasFactory;

    protected $table = 'data_spm';
    
    protected $fillable = ['jenis_pelayanan', 'indikator'];

    protected $hidden = ['created_at', 'updated_at'];

    public function BidangUrusan()
    {
        return $this->belongsTo(BidangUrusan::class);
    }
}
