<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyekPrioritas extends Model
{
    use HasFactory;

    protected $table = 'data_proyek_prioritas';

    protected $fillable = ['bidang_prioritas_id', 'nama'];

    protected $hidden = ['created_at', 'updated_at'];

    public function BidangPrioritas()
    {
        return $this->belongsTo(BidangPrioritas::class);
    }
    
}
