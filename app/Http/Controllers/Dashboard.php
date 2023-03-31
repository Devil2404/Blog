<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function show($user)
    {
        return view("dashboard", ['name' => $user]);
    }

}