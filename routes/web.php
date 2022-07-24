<?php

use Illuminate\Http\Request;
use App\Http\Controllers\siteController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/sum', function () {
//     return "Jewel Rana";


    Route::get('/', [siteController::class, 'index']);
    Route::get('/about', [siteController::class, 'about']);
    Route::get('/contact', [siteController::class, 'contact']);
    Route::get('/extra', [siteController::class, 'extra']);



?>



