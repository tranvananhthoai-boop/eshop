<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function orderproduct(){
        return $this->hasMany(Orderproduct::class);
    }

    public function user(){
        return $this->belongsTo(Users::class);
    }
}
