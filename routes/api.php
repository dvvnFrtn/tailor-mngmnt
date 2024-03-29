<?php

use App\Http\Controllers\Api\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('customers', [CustomerController::class, 'create']);

Route::put('customers/{id}', [CustomerController::class, 'update']);

Route::delete('customers/{id}', [CustomerController::class, 'destroy']);

Route::get('customers', [CustomerController::class, 'getAll']);

Route::get('customers/{id}', [CustomerController::class, 'getById']);
