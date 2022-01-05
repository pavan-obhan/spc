<?php

use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InspectionDefinitionController;
use App\Http\Controllers\InspectionItemController;
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

Route::get('inspection_definition',[InspectionDefinitionController::class,'index']);
Route::get('inspection',[InspectionController::class,'index']);

Route::post('inspection_item/create',[InspectionItemController::class,'store'])->middleware('auth.basic.once');
Route::put('inspection_item/update',[InspectionItemController::class,'update'])->middleware('auth.basic.once');

