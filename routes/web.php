<?php

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

Route::get('/home', function () {
    return view('pages.one');
});

Route::get('/catalog', function () {
    return view('pages.catalogo');
});

Route::get('/details', function () {
    return view('pages.details');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/howbuy', function () {
    return view('pages.howbuy');
});

Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
]);

Route::get('/admin', function () {
    return view('admin_pages.index');
});

Route::get('/tres', function () {
    return view('pages.one');
});
