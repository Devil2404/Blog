<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate(([
            "email" => "required"
        ]));
        if ($req->password != $req->repassword) {
            return redirect("/login")->with("alert", "Please enter same password in both input area");
        }
        $user = new User;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        $userData = User::where(['email' => $req->email, "password" => $req->password])->first();
        session(["userData" => $userData]);
        return redirect("/dashboard" . "/" . $req->email);

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
    public function edit(string $id)
    {
        $key = Session::get("userData");
        if ($key->name == null) {
            $data = User::where("email", $id)->get();
        } else {
            $data = User::where("name", $id)->get();
        }
        return view("update", ["name" => $id, "data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $req->validate(([
            "email" => "required"
        ]));
        $key = Session::get("userData");
        $user = User::find($key->id);
        $user->name = $req->userName;
        $user->email = $req->email;
        $user->phone_number = $req->phone_number;
        $user->save();
        return redirect("/dashboard/" . $req->userName);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}