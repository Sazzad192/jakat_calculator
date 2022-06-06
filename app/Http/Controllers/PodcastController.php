<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index(){
        return view('podcast/podcast-home');
    }
    public function archive()
    {
        return view('podcast/archive');
    }
    public function detail(){
        return view('podcast/detail');
    }
}
