<?php

use App\Http\Controllers\Api\AirlineController;
use App\Http\Controllers\Api\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/airlines', [AirlineController::class, 'index']);
Route::get('/airlines/{airline}', [AirlineController::class, 'show']);
Route::post('/airlines', [AirlineController::class, 'store']);
Route::put('/airlines/{airline}', [AirlineController::class, 'update']);
Route::delete('/airlines/{airline}', [AirlineController::class, 'destroy']);


Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/tickets/{ticket}', [TicketController::class, 'show']);
Route::post('/tickets', [TicketController::class, 'store']);
Route::put('/tickets/{ticket}', [TicketController::class, 'update']);
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy']);

