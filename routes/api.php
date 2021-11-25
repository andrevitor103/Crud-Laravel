<?php

use App\Http\Controllers\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('task')->group(function () {
    Route::get('tasks', [task::class, 'listTask']);
    Route::post('tasks', [task::class, 'createTask']);
    Route::put('task/{id}', [task::class, 'editTask']);
    Route::get('task/{id}', [task::class, 'showTaskAt']);
    Route::get('task/end/{id}', [task::class, 'endTask']); 
});
