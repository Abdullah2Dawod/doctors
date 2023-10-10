<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    public function catogre()
    {
        return $this->belongsTo('App\Models\catogre', 'catogre-id');
    }

    // public function orders(){

    //     return $this->belongsToMany(order::class , 'order_id');
    // }
}
