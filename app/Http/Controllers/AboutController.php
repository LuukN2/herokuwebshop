<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;

class AboutController extends Controller
{

    public function about(){
        return view('about');
    }
}
