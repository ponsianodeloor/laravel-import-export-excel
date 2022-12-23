<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DPAController;

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
        Route::get('users/imports/excel', 'createExcel')->name('users.imports.excel.create');

        Route::post('users/imports/excel', 'importExcel')->name('users.imports.excel.store');
    });

    Route::controller(DPAController::class)->group(function(){
        Route::get('dpa/imports/excel', 'createExcel')->name('dpa.imports.excel.create');

        Route::post('dpa/imports/excel', 'importExcel')->name('dpa.imports.excel.store');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
