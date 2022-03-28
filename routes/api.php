<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveResponse;
use App\Http\Controllers\GrapesController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/save', [App\Http\Controllers\SaveResponse::class, 'save']);
Route::post('/getName', [App\Http\Controllers\SaveResponse::class, 'getName']);
Route::delete('/destroy/{id}', [GrapesController::class, 'destroy'])->name('webpage.destroy');