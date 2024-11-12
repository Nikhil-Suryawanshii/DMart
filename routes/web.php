<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/read', [EmployeeController::class, 'read'])->name('employee.read');
