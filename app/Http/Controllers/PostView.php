<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostView extends Controller
{
    function show(string $title)
    {
        $data = Post::where("title", $title)->get();
        return view("postView", ["data" => $data]);

    }
}