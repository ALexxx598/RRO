<?php

use App\Http\Controllers\DrugStoreController;
use App\Http\Controllers\LegalEntityController;
use App\Http\Controllers\PRROController;
use App\Http\Controllers\RROController;
use App\Http\Controllers\WorkerController;
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

Route::get('/test',function () {
    return 'test';
});

Route::get('/legal-entity/filter-values/{column}', [LegalEntityController::class, 'getFilterList']);
Route::get('/legal-entity/list/', [LegalEntityController::class, 'list']);
Route::get('/legal-entity/{id}', [LegalEntityController::class, 'get']);
Route::post('/legal-entity/', [LegalEntityController::class, 'create']);
Route::patch('/legal-entity/{id}', [LegalEntityController::class, 'update']);
Route::delete('/legal-entity/{id}', [LegalEntityController::class, 'delete']);

Route::get('/worker/{id}', [WorkerController::class, 'get']);
Route::post('/worker/', [WorkerController::class, 'create']);
Route::patch('/worker/{id}', [WorkerController::class, 'update']);
Route::delete('/worker/{id}', [WorkerController::class, 'delete']);

Route::get('/rro/{id}', [RROController::class, 'get']);
Route::post('/rro/', [RROController::class, 'create']);
Route::patch('/rro/{id}', [RROController::class, 'update']);
Route::delete('/rro/{id}', [RROController::class, 'delete']);

Route::get('/prro/{id}', [PRROController::class, 'get']);
Route::post('/prro/', [PRROController::class, 'create']);
Route::patch('/prro/{id}', [PRROController::class, 'update']);
Route::delete('/prro/{id}', [PRROController::class, 'delete']);

Route::get('/drug-store/list/{id}', [DrugStoreController::class, 'list']);
Route::get('/drug-store/{id}', [DrugStoreController::class, 'get']);
Route::patch('/drug-store/{id}', [DrugStoreController::class, 'update']);
Route::delete('/drug-store/{id}', [DrugStoreController::class, 'delete']);
Route::post('/drug-store/', [DrugStoreController::class, 'create']);


