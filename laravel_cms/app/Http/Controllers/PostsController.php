<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return "Create";
    }
    public function post1($username,$password){
        return "Username is $username and Password is $password";
    }
}
