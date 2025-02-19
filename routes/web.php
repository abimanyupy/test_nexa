<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

// Route::get('/home', function () {
//     return view('main.main');
// });


Route::get('/home', [MenuController::class, 'bestCoffee'])->name('menu.bestCoffee');
