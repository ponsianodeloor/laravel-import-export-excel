<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/system', function () {
        return view('system.index');
    })->name('system');

    Route::controller(UserController::class)->group(function (){
        Route::get('users/exports/excel', 'exportExcel')->name('users.exports.excel');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
