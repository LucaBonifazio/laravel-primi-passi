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
    return view('homepage', [
        'name' => 'Laravel',
    ]);
});

Route::get('/instagram', function () {
    return view('instagram');
});

Route::get('/facebook', function () {
    return view('facebook');
});

Route::get('/linkedin', function () {
    return view('linkedin');
});

Route::get('/github', function () {
    return view('github');
});
