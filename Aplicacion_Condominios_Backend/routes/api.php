<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::post('/add_employee', [EmployeeController::class, 'store']);
Route::get('/get_all_employees', [EmployeeController::class, 'getAll']);
Route::delete('/delete_employee/{id}', [EmployeeController::class, 'delete']);
Route::get('/get_employee/{id}', [EmployeeController::class, 'getById']);
Route::post('/update_employee/{id}', [EmployeeController::class, 'update']);