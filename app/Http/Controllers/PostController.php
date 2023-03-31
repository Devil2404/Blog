<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use SebastianBergmann\Environment\Console;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($user)
    {
        $data = Post::all();
        return view("allpost", ["data" => $data, "name" => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($user)
    {
        return view("postcreate", ['name' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req, $user)
    {
        $req->validate(([
            "title" => "required"
        ]));
        $post = new Post;
        $post->title = $req->title;
        $post->category = $req->category;
        $post->creater = $user;
        $post->description = $req->description;
        $post->blog = $req->blog;
        $post->save();
        return redirect("/dashboard" . "/" . $user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, $user)
    {
        $data = Post::where("id", $id)->get();
        return view("postUpdate", ["data" => $data, "name" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id, $user)
    {
        //
        $req->validate(([
            "title" => "required"
        ]));
        $post = Post::find($id);
        $post->title = $req->title;
        $post->category = $req->category;
        $post->creater = $user;
        $post->description = $req->description;
        $post->blog = $req->blog;
        $post->save();
        return redirect("/dashboard" . "/" . $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, $user)
    {
        Post::where("id", $id)->delete();
        return redirect("/dashboard" . "/" . $user);

    }
}