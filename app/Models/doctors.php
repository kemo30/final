<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'facebook',
        'phone',
        'titel_ar',
        'titel_en',
        'twitter',
        'instagram',
        'whatsapp',
        'image',
        'services_id',
    ];


    public function service(){
        return $this->belongsTo(service::class,'services_id','id');
    }
    public function appointment(){
        return $this->hasMany(appointment::class,'doctor','id');
    }
}
