<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //to user factory method is the trait class
    use HasFactory;

    // دا في حالة ان لو غيرت اسم  الجدول الخاص بالبوستس الي اسم تاني
    // protected $tabel = "tests";

    // public $timestamps = false ; // if i want to stop timestamps in table of posts
    // protected $primaryKey = 'name of id';
    // public $incrementing = false ;// to stop auto increment from id

    //mass assignment
    // protected $fillable=['title','content']; //add in title and content just
    // protected $guarded=['check']; // add in all but check don't add
    protected $guarded; // add in all

    // هعمل علي دا كاستس بحيث انه يرجعلي ترو او فولس مش 0 و 1
    protected $casts = [
        // بص افرض ان بتاع الفرونت او الفلاتر طلب ان التشيك دا يجيله ترو او فولس كدا دا الحل بال الكاستس
    'check'=>'boolean',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    //relation between category with post many to many
    public function categories(){
        return $this->belongsToMany(Category::class , "category_post"/* name of table */);
    }
}
