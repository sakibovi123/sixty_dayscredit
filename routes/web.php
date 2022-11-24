<?php

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
//

Route::get('/', [App\Http\Controllers\LeadController::class, 'index']);
Route::post('create-lead', [\App\Http\Controllers\LeadController::class, 'create']);

Route::get('success', [\App\Http\Controllers\SuccesController::class, 'showSuccess']);

Route::get('privacy-policy', [\App\Http\Controllers\PrivacyPolicyController::class, 'index']);
