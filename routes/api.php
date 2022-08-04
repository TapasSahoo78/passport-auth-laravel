<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ProductController;


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

//Auth routes
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Route for admin permissions
Route::prefix('admin')->group(function () {
    Route::post('login', [AuthController::class, 'adminLogin']);
    Route::post('register', [AuthController::class, 'adminRegister']);
});

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{products}', [ProductController::class, 'show']);
Route::post('product', [ProductController::class, 'store'])->middleware(['auth:api', 'scope:create']);
Route::put('product/{product}', [ProductController::class, 'update'])->middleware(['auth:api', 'scope:edit']);
Route::delete('product/{product}', [ProductController::class, 'destroy'])->middleware(['auth:api', 'scope:delete']);
