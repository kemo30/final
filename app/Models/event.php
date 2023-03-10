<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable = [
            'name_ar',
            'name_en',
            'discription_ar',
            'discription_en',
            'Speakers',
            'venue_ar',
            'venue_en',
            'target_ar',
            'target_en',
            'image',
            'date',
            'time',
    ];
}
