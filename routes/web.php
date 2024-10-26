<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest gigs',
        'listings' => Listing::all()
    ]);
});

//Simgle Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
