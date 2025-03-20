<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'car_models'], function () {
    Route::get('/', \App\Http\Controllers\CarModel\IndexController::class)->name('car_models.index');
    Route::get('/create', \App\Http\Controllers\CarModel\CreateController::class)->name('car_models.create');
    Route::post('/', \App\Http\Controllers\CarModel\StoreController::class)->name('car_models.store');
    Route::get('/{car_model}', \App\Http\Controllers\CarModel\ShowController::class)->name('car_models.show');
    Route::get('/{car_model}/edit', \App\Http\Controllers\CarModel\EditController::class)->name('car_models.edit');
    Route::patch('/{car_model}', \App\Http\Controllers\CarModel\UpdateController::class)->name('car_models.update');
    Route::delete('/{car_model}', \App\Http\Controllers\CarModel\DeleteController::class)->name('car_models.destroy');
});

Route::group(['prefix' => 'drivers'], function () {
    Route::get('/', \App\Http\Controllers\Driver\IndexController::class)->name('drivers.index');
    Route::get('/create', \App\Http\Controllers\Driver\CreateController::class)->name('drivers.create');
    Route::post('/', \App\Http\Controllers\Driver\StoreController::class)->name('drivers.store');
    Route::get('/{driver}', \App\Http\Controllers\Driver\ShowController::class)->name('drivers.show');
    Route::get('/{driver}/edit', \App\Http\Controllers\Driver\EditController::class)->name('drivers.edit');
    Route::patch('/{driver}', \App\Http\Controllers\Driver\UpdateController::class)->name('drivers.update');
    Route::delete('/{driver}', \App\Http\Controllers\Driver\DeleteController::class)->name('drivers.destroy');
});

Route::group(['prefix' => 'buses'], function () {
    Route::get('/', \App\Http\Controllers\Bus\IndexController::class)->name('buses.index');
    Route::get('/create', \App\Http\Controllers\Bus\CreateController::class)->name('buses.create');
    Route::post('/', \App\Http\Controllers\Bus\StoreController::class)->name('buses.store');
    Route::get('/{bus}', \App\Http\Controllers\Bus\ShowController::class)->name('buses.show');
    Route::get('/{bus}/edit', \App\Http\Controllers\Bus\EditController::class)->name('buses.edit');
    Route::patch('/{bus}', \App\Http\Controllers\Bus\UpdateController::class)->name('buses.update');
    Route::delete('/{bus}', \App\Http\Controllers\Bus\DeleteController::class)->name('buses.destroy');
});

Route::group(['prefix' => 'settings'], function () {
    Route::get('/', \App\Http\Controllers\Setting\IndexController::class)->name('settings.index');
    Route::get('/create', \App\Http\Controllers\Setting\CreateController::class)->name('settings.create');
    Route::post('/', \App\Http\Controllers\Setting\StoreController::class)->name('settings.store');
    Route::get('/{setting}', \App\Http\Controllers\Setting\ShowController::class)->name('settings.show');
    Route::get('/{setting}/edit', \App\Http\Controllers\Setting\EditController::class)->name('settings.edit');
    Route::patch('/{setting}', \App\Http\Controllers\Setting\UpdateController::class)->name('settings.update');
    Route::delete('/{setting}', \App\Http\Controllers\Setting\DeleteController::class)->name('settings.destroy');
});

Route::group(['prefix' => 'ex_drivers'], function () {
    Route::get('/', \App\Http\Controllers\ExDriver\IndexController::class)->name('ex_drivers.index');
});

//Route::get('/', function () {
//    return view('welcome');
//});
