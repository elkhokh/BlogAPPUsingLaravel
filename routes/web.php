<?php

use App\Http\Controllers\Mostafa\MostafaController;
use App\Http\Controllers\Mostafa\TestController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;




// use App\Http\Controllers\TestController;

//route of controller in app/http/PageController.php
// Route::view('/',"index");

//update version in controller
Route::controller(PageController::class)->group(function(){
Route::get('/','index');
Route::get('index','index');

// Route::view('/about',"about");
Route::get('about','about');

// Route::view('/contact',"contact");
Route::get('contact','contact');
Route::post('contact','create_new_contact')->name("create_new_contact");
// Route::get('/contact/{id}',[PageController::class,'test']);

// Route::view('/post',"post");
Route::get('post','post');
Route::get('form','form');
Route::post('form/insert','insert')->name('form.insert');
// Route::post('/form','create_blog')->name('create_blog');

});


//another soluation
// Route::get('/',[PageController::class,'index']);
// Route::get('/index',[PageController::class,'index']);

// // Route::view('/about',"about");
// Route::get('/about',[PageController::class,'about']);

// // Route::view('/contact',"contact");
// Route::get('/contact',[PageController::class,'contact']);
// Route::post('/contact',[PageController::class,'create_new_contact'])->name("create_new_contact");
// // Route::get('/contact/{id}',[PageController::class,'test']);

// // Route::view('/post',"post");
// Route::get('/post',[PageController::class,'post']);
// Route::get('/form',[PageController::class,'form']);
// Route::post('/form',[PageController::class,'create_blog'])->name('create_blog');

/***************  just test  **************************** */
// route resource
Route::resource('mostafa',MostafaController::class)->middleware('auth');

////expect  route run all routes but are exist in expect()
// Route::resource('mostafa',MostafaController::class)->expect(['show','store']);
////only route run all method exist in only()
// Route::resource('mostafa',MostafaController::class)->only(['create','index','destroy','edit','update']);


/************************   single action controller ( invoke )    ************ */
Route::get('test_invoke',TestController::class);



//---------------------------------------

Route::controller(PostController::class)->prefix('posts')->group(function(){
Route::get('/','showPosts');
Route::get('/create','createPosts');
Route::get('/edit/{id}','editPosts');
Route::get('/update/{id}','updatePosts');
Route::get('/delete/{id}','deletePosts');

});


/********************  Test Eloquent **************** */
//ORM , Eloquent and Query Bluider
//Eloquent
// طبعا الكلام دا بيحصل في الكونترولر
Route::get('eloquent', function () {

    //create
    // $post=new Post() ;
    // $post->title ="castss";
    // $post->content ="test castss";
    // $post->views =1001;
    // $post->status ="active";
    // $post->check =1;
    // $post->save();

    // //select
    // return post::find(1);
    // return post::findOrFail(1);
    // return post::all();

    //update
    // $post = Post::find(1);
    // $post->title="update databse";
    // $post->save();

    //delete
    // $post=POst::find(2)->delete();

});

// mass assignment using guarded and fillable
Route::get('eloquent', function () {
    //create
    // Post::create([
    //     "title"=>"mass assignment",
    //     "content"=>"test mass assignmentone",
    //     "views"=>200,
    //     "status"=>"active",
    //     "check"=>1,
    //     "user_id"=>1
    // ]);
    //select
    // $select = post::all();
    // return $select ;

    //query
    //find all posts if check = 0
    // $find = Post::where('check','1')->get();
    // $find = Post::where('check','!=','1')->get();
    // $find = Post::where('check','false')->get();
    // return $find ;

    //orderby
    // $find = Post::orderBy('created_at')->get();
    // $find = Post::orderBy('created_at','desc')->get();
    // dd(now()->subDays(7));
    // $find =Post::where('check','false')->where('created_at','>=',now()->subDays(7))->get();
    // return $find ;

    //search
    // $search =Post::where('title','like','%data%')->limit(1)->get();
    // $search =Post::where('title','like','%data%')->first();
    // return $search ;

    //find
    // $find = Post::whereIn('id',[1,2,5])->get();
    // $find = Post::whereIn('id',[1,2,5])->first();
    // $find = Post::whereNotIn('id',[1,2,5])->get();
    // $find = Post::whereNull('content')->get();
    // $find = Post::whereNotNull('content')->get();
    // return $find ;

});

Route::get('profile',function(){
    // one to one relation
    // $user = User::create([
    //     'name'=>'mostafa3',
    //     'email'=>'mostafa@gmail.com3',
    //     'password'=>Hash::make('Aa1234567'),
    // ]);

    // $user->profile()->create([
    //     'phone'=>'01004643863',
    //     'address'=>'santa-tanta3',
    //     'bio'=>'backdeveloper PHP | laravel3'
    // ]);
    //  $select = Profile::all();
    //  return $select ;
    // $user = User::find(3)->profile ;
    // return $user ;
    // $profile = Profile::find(1)->user;
    // return $profile;

});
/**************************************************** */
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

