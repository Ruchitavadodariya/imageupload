<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', [ImagecrudController::class,'index'])->name('index');
Route::get('/create', [ImagecrudController::class,'create'])->name('create');
Route::post('/store', [ImagecrudController::class,'store'])->name('store');
