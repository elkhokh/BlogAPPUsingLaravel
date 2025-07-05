<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPosts(){
        return "schowPosts";
    }
    public function createPosts(){
        return "createPosts";
    }
    public function updatePosts(){
        return "updatePosts";
    }
    public function editPosts(){
        return "editPosts";
    }
    public function deletePosts(){
        return "deletePosts";
    }
}
