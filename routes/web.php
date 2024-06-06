<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

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

Route::get('/', [WorkerController::class, 'index'])->name('welcome');
Route::get('/worker/create', [WorkerController::class, 'create'])->name('worker.create');
Route::post('/worker/store', [WorkerController::class, 'store'])->name('worker.store');
Route::get('/worker/edit', [WorkerController::class, 'create'])->name('worker.edit');
Route::patch('/worker/update', [WorkerController::class, 'update'])->name('worker.update');
Route::delete('/worker/destroy', [WorkerController::class, 'destroy'])->name('worker.destroy');
