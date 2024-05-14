<?php

use App\Http\Controllers\OfferController;
use App\Models\Offer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(OfferController::class)->group(function () {
    Route::get('/offers', 'index')->name('offers.index');
    /*Route::get('/offres/{id}', 'show')->name('offers.show');*/
});

