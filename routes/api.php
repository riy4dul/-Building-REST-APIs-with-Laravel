<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('purchaser', 'ApiController@createPurchaser');
Route::get('purchaser', 'ApiController@getAllPurchaser');
Route::post('products', 'ApiController@createProduct');
Route::get('products', 'ApiController@getAllProduct');
Route::post('purchaser-product', 'ApiController@purchaserProduct');

Route::get('purchaser/{id}', 'ApiController@PurchaserAllProduct');
