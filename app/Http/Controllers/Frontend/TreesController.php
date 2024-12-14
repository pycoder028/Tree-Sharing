<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TreesController extends Controller
{
    public function index(){

        return view('frontend.pages.trees.index');
    }

    public function show($slug){

        return view('frontend.pages.trees.show');
    }

    public function upload(){

        return view('frontend.pages.trees.upload');
    }

}
