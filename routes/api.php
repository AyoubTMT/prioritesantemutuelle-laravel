<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormulaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/test', [TestController::class,"test"]);
Route::post('/suggest-formula', [FormulaController::class, 'suggestFormula']);
Route::post('/send-email', [ContactController::class, 'sendEmail']);
Route::post('/send-email-client', [ContactController::class, 'sendEmailClient']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
