<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delma extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'titel_ar',
        'titel_en',
        'image',
    ];
}
