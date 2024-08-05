<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PriceTableController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::get('/get_data_in_range', [PriceTableController::class, 'getDataInRange']) -> name('getDataInRange');
// Route::get('/get_data_city', [PriceTableController::class, 'getCityData']) -> name('getCityData');


Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/get_user', [AuthController::class, 'getUser'])->name('getUser');
    Route::get('/get_intrest_rates', [ApiController::class, 'getInterestRates']) -> name('getIntrestRates');
    Route::get('/get_data_city_in_range', [PriceTableController::class, 'getCityDataInRange']) -> name('getCityDataInRange');
    Route::get('/get_data', [PriceTableController::class, 'getData']) -> name('getData');
    Route::get('/get_data_in_range', [PriceTableController::class, 'getDataInRange']) -> name('getDataInRange');

});
