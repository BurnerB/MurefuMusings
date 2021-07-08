<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Setting extends Model

{
    public $timestamps = false;
    protected $primaryKey = null;

public $incrementing = false;
    protected $fillable = [
        'about_text', 'mobile', 'email','address','facebook','twitter','medium','linkedin','about_image'
    ];
    
}

