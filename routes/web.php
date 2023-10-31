<?php

use App\Http\Controllers\PlanController;
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
    return "hello world";
});

Route::get('/plan/create', [PlanController::class, 'create'])->name('plan.create');
Route::get('/plan', [PlanController::class, 'index'])->name('plan.index');
Route::post('/plan', [PlanController::class, 'store'])->name('plan.store');
Route::get('/plan/edit/{id}', [PlanController::class, 'edit'])->name('plan.edit');
Route::patch('/plan/{id}', [PlanController::class, 'update'])->name('plan.update');
Route::delete('/plan/{id}', [PlanController::class, 'destroy'])->name('plan.destroy');
Route::get('/plan/{id}', [PlanController::class, 'show'])->name('plan.show');