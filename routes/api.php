<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;

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

// [UserProfileController::class, 'show']

Route::get('/getvotos', [CandidatoController::class, 'getVotos']);
Route::post('/votar/{cargo}/{num}', [CandidatoController::class, 'votar']);
Route::post('/resetar', [CandidatoController::class, 'resetarEleicao']);

