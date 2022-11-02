<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name'
    ];

}

 
