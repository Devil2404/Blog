<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

// use App\Models\User;

class Login extends Controller
{
    function show()
    {
        return view("login");
    }

    function auth(Request $req)
    {
        $req->validate(([
            "email" => "required"
        ]));

        $userCheck = User::where(['email' => $req->email, "password" => $req->password])->count();
        if ($userCheck > 0) {
            $userData = User::where(['email' => $req->email, "password" => $req->password])->first();
            session(["userData" => $userData]);
            $key = Session::get("userData");
            if ($key->name == null) {
                return redirect("/dashboard/" . $key->email);
            } else {
                return redirect("/dashboard/" . $key->name);
            }
        } else {
            return redirect("login")->with("error", "Invalid email and password");
        }
    }

    function dashboard($user)
    {
        if (Session::has("userData")) {
            $key = Session::get("userData");
            if ($key->name == null) {
                $data = Post::where(["creater" => $key->email])->get();
            } else {
                $data = Post::where(["creater" => $key->name])->get();
            }
            return view("dashboard", ['name' => $user, "data" => $data]);
        } else {
            return redirect("/");
        }
    }

    function logout()
    {
        session()->forget(["userData"]);
        return redirect("/");
    }
}