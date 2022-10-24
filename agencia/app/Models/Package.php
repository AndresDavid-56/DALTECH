<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function city(){
        return $this->belongsTo(City::class, 'from');
    }

    public function city2(){
        return $this->belongsTo(City::class, 'to');
    }

    public function transport(){
        return $this->belongsTo(Transport::class, 'transports_id');
    }

    public function guide(){
        return $this->belongsTo(Guide::class, 'guides_id');
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotels_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
