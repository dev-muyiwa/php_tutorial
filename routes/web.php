<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// For custom headers
//Route::get('hello', function () {
//    return response('<h1>Hello World!</h1>', 200)
//        ->header('Content-Type', 'text/plain')
//        ->header('foo', 'bar');
//});
//
//
//// Wild cards with regex that accepts only numbers
//Route::get('/posts/{id}', function ($id) {
////    dd($id);
////    ddd($id);
//    return response('Post ' . $id);
//})->where('id', '[0-9]+');
//
//Route::get('/search', function (Request $request) {
//    return $request->name.' '.$request->city;
//});
