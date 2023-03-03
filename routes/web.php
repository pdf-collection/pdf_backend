<?php

use App\Models\Tag;
use App\Models\BookTag;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

// Route::get('/book_tags', function () {
//     $booktags =Tag::where('id',1)->first()->booktags;
//     return $booktags;
//     return BookTag::create([
//         'book_id' => 3,
//         'tag_id' => 1,
//     ]);
// });

Route::get('/users', function () {
    return User::all();
    return User::create([
        'name' => 'eee',
        'email' => 'eee@gmail.com',
        'password' => Hash::make('internet'),
    ]);
});
