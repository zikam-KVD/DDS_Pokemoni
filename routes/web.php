<?php

use App\Models\Gym;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Routa pro zobrazení všech trenérů.
 */
Route::get('/trainers', function() {

    $trainers = User::all();

    return view('trainers', ['treneri' => $trainers]);
})->name('showTrainers');

/**
 * Routa pro zobrazení všech lokací.
 */
Route::get('/locations', function() {

    $locations = DB::table("locations")->select(["*"])->get();

    return view('locations', ['lokace' => $locations]);
})->name('showLocations');

/**
 * Routa pro zobrazení všech arén.
 */
Route::get('/gyms', function() {

    $gyms = Gym::all();

    return view('gyms', ['areny' => $gyms]);
})->name('showGyms');
