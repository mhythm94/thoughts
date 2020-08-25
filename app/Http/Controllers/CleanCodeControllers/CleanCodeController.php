<?php

namespace App\Http\Controllers\CleanCodeControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cleanCodeController extends Controller
{
    public function getIndex(){
        return view('cleanBlog.index');
    }
    public function getAbout(){
        return view('cleanBlog.about');
    }
    public function getContact(){
        return view('cleanBlog.contact');
    }
}
