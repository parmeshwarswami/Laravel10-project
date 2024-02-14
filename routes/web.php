<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Seo\SeoRegionController;
use App\Http\Controllers\Seo\SeoCountryController;
use App\Http\Controllers\Seo\SeoCityController;

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

Route::group(['prefix' => 'admin'], function () {

    Route::resource('seo-regions', SeoRegion::class);
    Route::resource('seo-countries', SeoRegion::class);
    Route::resource('seo-cities', SeoRegion::class);

});
