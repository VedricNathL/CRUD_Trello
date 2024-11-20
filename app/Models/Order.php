<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'absens',
        'name_karyawan',
    ];

    protected $casts = [
        'absens' => 'array',
        'gurus' => 'array'
    ];
}
