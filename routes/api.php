<?php

use Illuminate\Http\Request;
use App\dudi;
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

Route::get('data', 'ExcelController@showAll');
Route::get('data/{kota}', function($kota) {
    return dudi::where('kota', $kota)->get();
});
Route::get('data/{kuota}', function($kuota) {
    return dudi::where('kuota', $kuota)->get();
});
Route::post('data/create','ExcelController@create');
Route::delete('data/delete/{id}','ExcelController@delete');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
