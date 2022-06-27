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

$data_links = config('links');
$series = config('comics');
$series_data = [
    "series_data" => $series
];

Route::get('/', function () use ($data_links, $series_data) {  
    $data = array_merge($data_links, $series_data);
    return view('home', $data);
})->name('home');

Route::get('/comics', function() use ($data_links, $series_data) {
    $data = array_merge($data_links, $series_data);
    return view('comics_section', $data);
})->name('comics');

Route::get('/comics-info/{id}', function($id) use ($data_links, $series_data) {
    dd($id);
    $data = array_merge($data_links, $series_data);
    return view('comics_info', $data);
})->name('comics_info');

Route::get('/characters', function() use ($data_links) {
    return view('/characters', $data_links);
})->name('characters');

Route::get('/collectibles', function() use ($data_links) {
    return view('/collectibles', $data_links);
})->name('collectibles');

Route::get('/games', function() use ($data_links) {
    return view('/games', $data_links);
})->name('games');

Route::get('/movies', function() use ($data_links) {
    return view('/movies', $data_links);
})->name('movies');

Route::get('/news', function() use ($data_links) {
    return view('/news', $data_links);
})->name('news');

Route::get('/shop', function() use ($data_links) {
    return view('/shop', $data_links);
})->name('shop');

Route::get('/tv', function() use ($data_links) {
    return view('/tv', $data_links);
})->name('tv');

Route::get('/videos', function() use ($data_links) {
    return view('/videos', $data_links);
})->name('videos');

Route::get('/fans', function() use ($data_links) {
    return view('/fans', $data_links);
})->name('fans');