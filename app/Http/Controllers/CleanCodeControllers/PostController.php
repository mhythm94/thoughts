<?php

namespace App\Http\Controllers\CleanCodeControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function getSamplePost($id){
        $data= Post::get()->where('id', $id);
        return view('cleanBlog.post')->with('data', $data);
    }

    public function getNewPost(){
        return view('cleanBlog.createPost');
    }

    public function store(Request $request){
         // validation
         $rules=[
             'name'=> 'required',
             'email'=>'required',
             'heading'=>'required',
             'body'=>'required'
         ];

         $messages=[];

        $validator= Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

         //Insertion

         Post::create([
             'name'=> $request->name,
             'email'=> $request->email,
             'heading'=> $request->heading,
             'sub_heading'=> $request->sub_heading,
             'body'=> $request->body
         ]);

         return route('home');
    }

    public function getIndex(){
        $posts= Post::get();
        return view('cleanBlog.index')->with('posts', $posts);
    }

}
