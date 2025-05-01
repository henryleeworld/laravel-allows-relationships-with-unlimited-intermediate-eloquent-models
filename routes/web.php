<?php

use App\Http\Controllers\CountriesController;
use Illuminate\Support\Facades\Route;

Route::get('countries/show/', [CountriesController::class, 'show']);
