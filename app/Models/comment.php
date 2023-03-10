<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'image',
        'event_id',
        'user_name',
        'email',
        'status',
    ];
}
