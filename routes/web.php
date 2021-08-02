<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    // Mengirim Data ke about page
    return view('about', [
        "title" => "About",
        "name" => "Azmi Munif Hartono",
        "email" => "azmimunifhartono@gmail.com",
        "image" => "pp.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// halaman single posts
Route::get('posts/{slug}', [PostController::class, 'show']);