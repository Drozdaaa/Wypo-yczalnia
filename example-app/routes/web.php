<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\OfferController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(OfferController::class)->group(function () {
    Route::get('/offers/create', 'create')->name('offers.create')->middleware('auth');
    Route::get('/offers', 'index')->name('offers.index');
    Route::get('/offers/{id}', 'show')->name('offers.show');
    Route::delete('/offers/{offer}', 'destroy')->name('offers.destroy');
    Route::get('/offers/{id}/edit', 'edit')->name('offers.edit')->middleware('auth');
    Route::put('/offers/{id}', 'update')->name('offers.update');
    Route::get('/table', 'table')->name('offers.table')->middleware('auth');
    Route::post('/offers', 'store')->name('offer.store');

});


Route::controller(MachineController::class)->group(function () {
    Route::get('/machines', 'index')->name('machines.index');
    Route::get('/machines/create', 'create')->name('machines.create')->middleware('auth');
    Route::get('/machines/{id}/edit', 'edit')->name('machines.edit')->middleware('auth');
    Route::put('/machines/{id}', 'update')->name('machines.update');
    Route::post('/machines', 'store')->name('machine.store');
    Route::delete('/machines/{machine}', 'destroy')->name('machines.destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});
