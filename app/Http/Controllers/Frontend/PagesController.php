<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('frontend.pages.index');
    }

    public function signin(){

        return view('frontend.pages.signin');
    }

    public function signup(){

        return view('frontend.pages.signup');
    }

}
