<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //   protected $guarded; // add in all
    //   protected $fillable=['name']; //add in title and content just

    protected $guarded; // add in all
    public function posts(){
        return $this->belongsToMany(Post::class , "category_post"/* name of table */);
    }

}
