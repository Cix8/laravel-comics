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
    $data_links = config('links');
    $header_links = $data_links["header_links"];
    $buy_links = $data_links["buy_links"];
    $footer_links = $data_links["footer_links"];
    $series_data = config('comics');
    return view('home', [
        "header_links" => $header_links,
        "series_data" => $series_data,
        "buy_links" => $buy_links,
        "footer_links" => $footer_links
    ]);
})->name('home');

Route::get('/comics', function() {
    $data_links = config('links');
    $header_links = $data_links["header_links"];
    $footer_links = $data_links["footer_links"];
    $series_data = config('comics');
    return view('comics_section', [
        "header_links" => $header_links,
        "series_data" => $series_data,
        "footer_links" => $footer_links
    ]);
})->name('comics');