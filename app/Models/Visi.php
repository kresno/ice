<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    use HasFactory;

    protected $table        = 'visi';
    protected $hidden       = 'id';
    protected $fillable     = ['nama', 'mulai', 'selesai', 'status'];
    protected $casts        = ['status' => 'boolean'];

    public function scopeActive(Builder $query)
    {
        return $query->where('status', true)->first();
    }
}
