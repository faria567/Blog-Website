<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiztroxController;
use App\Http\Controllers\AdminDashboardController;
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

Route::get('/',[BiztroxController::class, 'index'])-> name(name:'home');
Route::get('/blog-category',[BiztroxController::class, 'category'])-> name(name:'blog-category');
Route::get('/blog-detail',[BiztroxController::class, 'detail'])-> name(name:'blog-detail');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('dashboard');
});
