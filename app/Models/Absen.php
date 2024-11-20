<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'tanggal',

        
    ];
    protected $casts = [
        'tanggal' => 'datetime',  // Ensures 'tanggal' is treated as a Carbon instance
    ];
}
