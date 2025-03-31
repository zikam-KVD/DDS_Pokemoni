<?php

use App\Models\Trainer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Routa pro zobrazení všech trenérů.
 */
Route::get('/trainers', function() {

    $trainers = null;

    return view('trainers', ['treneri' => $trainers]);
})->name('showTrainers');

/**
 * Routa pro zobrazení všech lokací.
 */
Route::get('/locations', function() {

    $locations = null;

    return view('locations', ['lokace' => $locations]);
})->name('showLocations');

/**
 * Routa pro zobrazení všech arén.
 */
Route::get('/gyms', function() {

    $gyms = null;

    return view('gyms', ['areny' => $gyms]);
})->name('showGyms');
