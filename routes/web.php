<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\PostView;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [Home::class, "show"]);
Route::get("/login", [Login::class, "show"]);
Route::get("/logout", [Login::class, "logout"]);
Route::post("/login", [Login::class, "auth"]);
Route::get("/{title}", [PostView::class, "show"]);
Route::get("/dashboard/{user}", [Login::class, "dashboard"]);
Route::get("{user}/post/{id}/delete", [PostController::class, "destroy"]);
Route::resource("/{user}/post", PostController::class);
Route::resource("/user", UserController::class);