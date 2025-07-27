<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    //mass assignment
    protected $fillable=['name','discraption']; //add in name and discraption just prefere this
    // protected $guarded=['check']; // add in all but check don't add
    // protected $guarded; // add in all

    //scope query
    public function scopeProduct($query){
    return $query->where('name',"Chastity Banks");
    }
}

