<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;




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

// Routes for store index
Route::get('/', [StoreController::class, 'index'])->name('stores.index');
Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');

// Routes for store creation
Route::get('/stores/create', [StoreController::class, 'create'])->name('stores.create');
Route::post('/stores', [StoreController::class, 'store'])->name('stores.store');

// Route for store details
Route::get('/stores/{id}', [StoreController::class, 'show'])->name('stores.show');

// Routes for store editing
Route::get('/stores/{id}/edit', [StoreController::class, 'edit'])->name('stores.edit');
Route::put('/stores/{id}', [StoreController::class, 'update'])->name('stores.update');

// Route for store deletion
Route::delete('/stores/{id}', [StoreController::class, 'destroy'])->name('stores.destroy');

// Route for employee index
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Routes for employee creation
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Route for employee details
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');

// Routes for employee editing
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');

// Route for employee deletion
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

// Route for position creation
Route::post('/positions', [PositionController::class, 'store'])->name('positions.store');

// Route for position deletion
Route::delete('/positions/{id}', [PositionController::class, 'destroy'])->name('positions.destroy');



