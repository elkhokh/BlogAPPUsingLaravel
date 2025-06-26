<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

    // to debugging the code
    // dd(PageController::class);
    // dump(PageController::class);
    // dd($this);


        $posts =[
        ['title'=>"Man must explore, and this is exploration at its greatest" ,
        "subtitle"=>"Problems look mighty small from 150 miles up",
        "create_name"=>"ali",
        "created_at"=>"on September 24, 2025"
        ],
            ['title'=>"Man must explore, and this is exploration at its greatest" ,
        "subtitle"=>"Problems look mighty small from 150 miles up",
        "create_name"=>"sara",
        "created_at"=>"on September 4, 2025"
    ],
        ['title'=>"Man must explore, and this is exploration at its greatest" ,
        "subtitle"=>"Problems look mighty small from 150 miles up",
        "create_name"=>"mostafa",
        "created_at"=>"on September 2, 2025"
    ],

    ];
        return view("index",["posts"=>$posts]);
    }
    public function about(){
        return view("about");
    }
    public function post(){
        return view("post");
    }
    public function contact(){
        return view("contact");
    }
    //     public function test($id){
    //         dd($id);
    //     return view("contact");
    // }
}
// dd(new PageController);
