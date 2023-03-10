<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'titel_ar',
        'titel_en',
        'icon',
        'image',
    ];


    public function doctor(){
        return $this->hasMany(doctors::class,'services_id','id');
    }
    public function appointment(){
        return $this->hasMany(appointment::class,'service','id');
    }
    

}
