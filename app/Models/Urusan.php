<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urusan extends Model
{
    use HasFactory;

    protected $table = 'urusan';

    protected $fillable = ['kode', 'nama'];

    protected $hidden = ['created_at', 'updated_at']; 

}
