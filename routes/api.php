<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/students',[StudentController::class, 'index'])->name('index');
Route::post('v1/students',[StudentController::class, 'store'])->name('store');
Route::get('v1/students/{id}',[StudentController::class, 'show'])->name('show');
Route::get('v1/students/{id}/edit',[StudentController::class, 'edit'])->name('edit');
Route::put('v1/students/{id}/edit',[StudentController::class, 'update'])->name('update');
