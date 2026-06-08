<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('/produk/soto-kids', function () { return view('produk.soto'); });
Route::get('/produk/sele-bun', function () { return view('produk.sele'); });
Route::get('/produk/ledok-ledok', function () { return view('produk.ledok'); });