<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Home extends Controller
{
    function show()
    {
        $data = Post::all();
        return view("home", ["data" => $data]);
    }
}