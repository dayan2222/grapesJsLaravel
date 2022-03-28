<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrapesController;
use App\Http\Controllers\SaveResponse;

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

Route::get('/', [GrapesController::class, 'create']);
Route::post('/webpageName', [SaveResponse::class, 'index']);

Route::get('/grapesjs', [GrapesController::class, 'index']);
Route::get('/edit/{id}', [GrapesController::class, 'edit'])->name('webpage.edit');



Route::get('/succesPage', function (){
    # code...
    return "Done";
});
// php artisan make:controller GrapesController --resource