<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;


// Route::view('/',"index");
Route::get('/',[PageController::class,'index']);

// Route::view('/about',"about");
Route::get('/about',[PageController::class,'about']);

// Route::view('/contact',"contact");
Route::get('/contact',[PageController::class,'contact']);
Route::post('/contact',[PageController::class,'create_new_contact'])->name("create_new_contact");
// Route::get('/contact/{id}',[PageController::class,'test']);

// Route::view('/post',"post");
Route::get('/post',[PageController::class,'post']);
Route::get('/form',[PageController::class,'form']);




/***************  just test  **************************** */
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index', function () {
//     return view("index");
// });
// Route::get('post', function () {
//     return view("post");
// });
// Route::get('contact', function () {
//     return view("contact");
// });
// Route::get('about', function () {
//     return view("about");
// });



/***************** TEST Route  useing controller **************************** */
//~echo TestController::class;// == App\Http\Controllers\TestController
// Route::get('home', [TestController::class,'firstAction' ]);

// callback function in php using laravel

// Route::get('/home', function () {
//     return "hello laravel";
// });

// Route::get('/home/{id}', function ($id) {
//     return "home $id ";
// });

// Route::get('/home/{category}/{id}', function (string $category , int $id) {
//     return "home deta $id and $category";
// })->where (['id' =>'[0-9]+', 'category' =>'[a-z]+']);

// i give default value for URL if not given i will show Geust
// Route::get('/home/{name?}', function ($name= "Geust") {
//     return $name ;
// })->name("mostafa");

// -----------------------------------------------------------------
// to show the contect in home page

// Route::get('home',function(){
//     return view("home");
// });

// another soulation
// Route::get('home', function (){
//     $name = "ali";
//     $email = "mostafa@gmail.com";
//     $age = "22";
//     return view("home", compact('name', 'email', 'age'));
// });
// Route::get('home', function () {
//     $name = "good man";
//     return view("home", compact('name'));
// });

// Route::get('home', function () {
//     $name = "mostafa";
//     return view("home")->with('user_name', $name);
// });

// Route::get('home', function () {
//     $name = "mostafa";
//     return view("home", ['user_name' => $name]);
// });


// Route::get('home', function () {
//     $name = "mostafa";
//     $age = 26;
//     $city = "Alex";
//     return view("home", compact('name', 'age', 'city'));
// });

// Route::get('home', function () {
//     $name = "mostafa";
//     $age = 26;
//     $city = "Alex";
//     return view("home")->with('name', $name)->with('age', $age)->with('city', $city);
// });

// Route::get('home', function () {
//     $name = "mostafa";
//     $age = 26;
//     $city = "Alex";
//     return view("home", ['name'=> $name, 'age'=> $age, 'city'=> $city]);
// });

// Route::get('home', function () {
//     $name = "mostafa";
//     $age = 26;
//     $job = "PHP Developer";
//     $skills = ['html','css','php','laravel'];
//     return view("home")->with(['name'=> $name, 'age'=> $age, 'job'=> $job , 'skills' => $skills]);
// });

// Route::get('home', function () {
//     $name = "mostafa";
//     $age = 26;
//     $job = "PHP Developer";
//     $skills = ['html','css','php','laravel'];
//     return view("home", ['name'=> $name, 'age'=> $age, 'job'=> $job , 'skills' => $skills]);
// });

