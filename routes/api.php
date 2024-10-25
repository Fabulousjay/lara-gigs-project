<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route for fetching all posts
Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            [
                'title' => 'Post One'
            ]
        ]
    ]);
});



//Route for getting the authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

