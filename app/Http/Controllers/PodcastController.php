<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index(){
        return view('podcast');
    }
    public function archive()
    {
        return view('archive');
    }
    public function detail(){
        return view('detail');
    }
}
