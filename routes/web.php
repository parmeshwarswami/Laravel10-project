<?php

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
    return view('Admin/dashboard');
});
echo "hii";

Route::group(['prefix' => 'admin'], function () {

    Route::resource('seo-regions', SeoRegion::class);
    Route::resource('seo-countries', SeoRegion::class);
    Route::resource('seo-cities', SeoRegion::class);

});
