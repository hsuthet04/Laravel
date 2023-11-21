<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return "About Page";
});
Route::get('/post/hey', array('as' => 'dev.home', function () {
    $url = route('dev.home');
    return "Url is" . $url;
}));
Route::get('/post',[PostsController::class,'create']);

Route::get('/post1/{username}/{password}',[PostsController::class,'post1']);