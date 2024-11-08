<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);
