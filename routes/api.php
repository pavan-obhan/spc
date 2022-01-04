<?php

use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InspectionDefinitionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('inspection_definition',[InspectionDefinitionController::class,'show']);
//Route::put('inspection_item/create',[InspectionDefinitionController::class,'store']);
//Route::put('inspection_item/update',[InspectionDefinitionController::class,'store']);
//Route::get('inspection',[InspectionController::class,'show']);
