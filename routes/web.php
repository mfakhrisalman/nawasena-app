<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [LoginController::class, 'register'])->name('login')->middleware('guest');
Route::post('/register/create', [LoginController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/client', ClientController::class)->middleware('auth');
Route::resource('/project', ProjectController::class)->middleware('auth');

Route::get('/transaction', [TransactionController::class, 'index'])->middleware('auth');
Route::get('/transaction/rent', [TransactionController::class, 'rent'])->middleware('auth');
Route::post('/transaction/store', [TransactionController::class, 'store'])->middleware('auth');
Route::get('/transaction/{transaction}/edit', [TransactionController::class, 'edit'])->middleware('auth');
Route::put('/transaction/{transaction}', [TransactionController::class, 'update'])->middleware('auth');

Route::get('/payment', [TransactionController::class, 'payment'])->middleware('auth');
Route::get('/payment/{transaction}/pay', [TransactionController::class, 'pay'])->middleware('auth');
Route::put('/payment/{transaction}', [TransactionController::class, 'updatePay'])->middleware('auth');

Route::get('/list-payment', [TransactionController::class, 'listPayment'])->middleware('auth');
Route::get('/list-payment/{transaction}/valid', [TransactionController::class, 'valid'])->middleware('auth');
Route::put('/list-payment/{transaction}', [TransactionController::class, 'updateValid'])->middleware('auth');

Route::get('/history', [TransactionController::class, 'history'])->middleware('auth');



