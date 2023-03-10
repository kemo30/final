<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'email',
       'phone',
       'doctor',
       'service',
       'date',
       'message',
    ];

    public function services(){
        return $this->belongsTo(service::class,'service','id');
    }
    public function doctors(){
        return $this->belongsTo(doctors::class,'doctor','id');
    }
    
}
