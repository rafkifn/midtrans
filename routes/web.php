<?php
use App\Http\Controller\webController;
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

Route::get('/', [App\Http\Controllers\webController::class, 'index']);
Route::get('/payment', [App\Http\Controllers\webController::class, 'payment']);
Route::post('/payment', [App\Http\Controllers\webController::class, 'payment_post']);