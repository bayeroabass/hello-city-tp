<?php
use Illuminate\Support\Facades\Route;

Route::name('home')->get('/', function () {
    return view('pages.home');
});
Route::name('about')->get('/about-us',function(){
    return view('pages/about');
});
/*Route::get('/help',function(){
    return view('pages.help');
});*/

// derniere version de php

Route::get('/help', fn() => view('pages.help'));

//on peut utiliser comme aussi
//Route::view('/help', 'page.help');
