<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::middleware('splade')->group(function () {
        Route::spladeTable();

        Route::get('/', function () {
            return view('welcome');
        });

        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
        });

        require __DIR__.'/auth.php';
    });
});


Route::get('go', function(){
    return view('pages/index');
});
