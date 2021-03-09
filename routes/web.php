<?php

use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//index
Route::get('/', [PagesController::class, 'index']);

//contact page
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact', [PagesController::class, 'store']);
// Route::get('/contact', function () 
// {
//     return view('pages.contact');
// });

