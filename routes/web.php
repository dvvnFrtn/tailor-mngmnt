<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

// Route::get('/', function () {
//     return view('admin.dashboard');
// });

// Route::get('/pelanggan', function () {
//     return view('admin.pelanggan');
// });

Route::get('/', [adminController::class, 'dashboard']);
Route::get('/dashboardTambah', [adminController::class, 'dashboardTambah']);
Route::get('/dashboardEdit', [adminController::class, 'dashboardEdit']);

