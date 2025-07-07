<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // دا في حالة ان لو غيرت اسم  الجدول الخاص بالبوستس الي اسم تاني
    // protected $tabel = "tests";

    //mass assignment
    // protected $fillable=['title','content']; //add in title and content just
    // protected $guarded=['check']; // add in all but check don't add
    protected $guarded; // add in all

    // هعمل علي دا كاستس بحيث انه يرجعلي ترو او فولس مش 0 و 1
    protected $casts = [
        // بص افرض ان بتاع الفرونت او الفلاتر طلب ان التشيك دا يجيله ترو او فولس كدا دا الحل بال الكاستس
    'check'=>'boolean',
    ];
}
