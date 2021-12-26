<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangPrioritas extends Model
{
    use HasFactory;

    protected $table = 'data_bidang_prioritas';

    protected $fillable = ['nama'];

    protected $hidden = ['created_at', 'updated_at'];
}
