<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller // StudlyCase
{
    public function firstAction(){ // camelCase
    $name = "mostafa";
    $age = 26;
    $job = "PHP Developer";
    $skills = ['html','css','php','laravel'];
    return view("home", ['name'=> $name, 'age'=> $age, 'job'=> $job , 'skills' => $skills]);
    }
}
