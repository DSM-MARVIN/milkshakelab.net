<?php

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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/videos', 'PostController@video')->name('post.video');
Route::get('/posts', 'PostController@allow')->name('post.allow');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/notes', 'PostController@notes')->name('post.notes');


Route::get('/posts/{post}/comments', function (Post $post) {
    return $post->comments;
});

Route::post('/posts/{post}/comments', function (Request $request, Post $post) {
    $comment = new \Laravelista\Comments\Comment;
    $comment->commenter()->associate(auth()->user());
    $comment->commentable()->associate($post);
    $comment->comment = $request->comment;
    $comment->approved = true;
    $comment->save();

    return $comment;
});

Addchat::routes();
