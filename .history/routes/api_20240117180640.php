<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauScolaireController;

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
Route::middleware('api')->group(function () {
    Route::resource('etudiants', EtudiantController::class);
    });
Route::middleware('api')->group(function () {
    Route::resource('niveau_scolaires', NiveauScolaireController::class);
    });

    
    Route::get('/nvsc/{idetd}',
     [NiveauScolaireController::class,'showNiveauScolaireByCAT']);
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});
