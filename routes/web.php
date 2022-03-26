<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrapesController;

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

Route::get('/grapesjs', [GrapesController::class, 'index']);
// php artisan make:controller GrapesController --resource