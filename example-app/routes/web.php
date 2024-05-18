<?php

use App\Http\Controllers\MachineController;
use App\Http\Controllers\OfferController;
use App\Models\Machine;
use App\Models\Offer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(OfferController::class)->group(function () {
    Route::get('/offers', 'index')->name('offers.index');
    Route::get('/offers/{id}', 'show')->name('offers.show');
});

Route::controller(MachineController::class)->group(function () {
    Route::get('/machines', 'index')->name('machines.index');
    /*Route::get('/offres/{id}', 'show')->name('offers.show');*/
    Route::get('/machines/{id}/edit', 'edit')->name('machines.edit');
    Route::put('/machines/{id}', 'update')->name('machines.update');
});
