<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EntretienApiController;

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


Route::get('/entretiens', [EntretienApiController::class, 'index']);
Route::post('/entretiens', [EntretienApiController::class, 'store']);
Route::get('/entretiens/{id}', [EntretienApiController::class, 'show']);
Route::put('/entretiens/{id}', [EntretienApiController::class, 'update']);
Route::delete('/entretiens/{id}', [EntretienApiController::class, 'destroy']);
