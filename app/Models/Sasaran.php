<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;
    protected $table    = 'sasaran';
    protected $fillable = ['nama', 'tujuan_id'];
    protected $hidden   = ['created_at', 'updated_at'];

    public function Tujuan()
    {
        return $this->belongsTo(Tujuan::class);
    }

}
