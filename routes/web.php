<?php

use App\Http\Controllers\InspectionDefinitionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inspection/export',[InspectionDefinitionController::class,'export']);
Route::post('inspection/import',[InspectionDefinitionController::class,'store']);

