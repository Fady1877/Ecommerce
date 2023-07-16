<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
{
    public function index(){
        return view('posts');
    }
    public function create(Request $request){
        if ($request->isMethod('post')){
           // $stmt=DB::insert('INSERT INTO posts (title, body) VALUES (?, ?);',['First post','This is a post on the site believe me']);
        }
        elseif($request->isMethod('get')){
            return view('createPost');
        }
        }

}
