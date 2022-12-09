<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageLaptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'merek',
        'deskripsi',
        'stock',
        'image'
    ];
}
