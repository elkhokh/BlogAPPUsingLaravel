<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){

    // to debugging the code
    // dd(PageController::class);
    // dump(PageController::class);
    // dd($this);

    //     $posts =[
    //     ['title'=>"Man must explore, and this is exploration at its greatest" ,
    //     "subtitle"=>"Problems look mighty small from 150 miles up",
    //     "create_name"=>"ali",
    //     "created_at"=>"on September 24, 2025"
    //     ],
    //         ['title'=>"Man must explore, and this is exploration at its greatest" ,
    //     "subtitle"=>"Problems look mighty small from 150 miles up",
    //     "create_name"=>"sara",
    //     "created_at"=>"on September 4, 2025"
    // ],
    //     ['title'=>"Man must explore, and this is exploration at its greatest" ,
    //     "subtitle"=>"Problems look mighty small from 150 miles up",
    //     "create_name"=>"mostafa",
    //     "created_at"=>"on September 2, 2025"
    // ],
    // ];
    $posts = Post::with('user')->get();

    // pagenation
    $posts = Post::paginate(2); //with show number of pages
    // $posts = Post::simplePaginate(2);// without show the number of pages is faster than paginate
    // $posts = Post::cursorPaginate(2);// without show the number of pages and is the faster than of them when use alotof record

    // $posts = Post::all();
    // return $posts;

        return view("index",["posts"=>$posts]);

    }
    public function about(){
        return view("about");//go to about page in views
    }
    public function post(){
        return view("post");//go to post page in views
    }
    public function contact(){
        return view("contact");//go to contact pate  in views
    }
    // public function form(){
    //     return view("form");
    //     // return view('form', compact('forms'));
    // }

public function form() {
    $forms = DB::table('forms')->get();
    return view('form', ['forms' => $forms]);
}
    public function insert(Request $request ){
        // dd($request->all());
        // return $request ;

        // to insert in database
        DB::table('forms')->insert([
            'title'=>$request->title,
            'content'=>$request->content,
            'is_published'=>$request->is_published ?? 0,
            'has_content'=>$request->has_content ?? 0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

    $forms = DB::table('forms')->get();
    return view('form', ['forms' => $forms]);
        // return true;
        // $forms=DB::table('forms')->get();
        // return view('form',compact('forms'));
        // return view('form',['forms'=>$forms]);
        // return  DB::table('forms')->get();

    }
    public function create_blog(Request $request ){
        dd($request->all());
        // return view("contact");
    }
        public function create_new_contact(Request $request ){
            dd($request->all());
        // return view("contact");
    }
    //     public function test($id){
    //         dd($id);
    //     return view("contact");
    // }

    public function edit($id){
        return $id ;
    }
}
// dd(new PageController);
