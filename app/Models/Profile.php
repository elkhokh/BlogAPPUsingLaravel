<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded;

    //relation with user
    public function user(){
        //one to one relation
        // ينتمي للبروفايل
        return $this->belongsTo(User::class);
    }
}
