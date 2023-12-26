<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StaffsController;
use App\Http\Controllers\Api\CheckupsController;
use App\Http\Controllers\Api\PatientsController;
use App\Http\Controllers\Api\ReferralsController;
use App\Http\Controllers\Api\AppointmentsController;
use App\Http\Controllers\Api\DoctorSchedulesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PatientsController::class)->group(function () {
    Route::get('/patient',          'index');
    Route::get('/patient/{id}',     'show');
    Route::post('/patient',         'store');
    Route::put('/patient/{id}',     'update');
    Route::delete('/patient/{id}',  'destroy');
});

Route::controller(AppointmentsController::class)->group(function () {
    Route::get('/appointment',          'index');
    Route::get('/appointment/{id}',     'show');
    Route::post('/appointment',         'store');
    Route::put('/appointment/{id}',     'update');
    Route::delete('/appointment/{id}',  'destroy');
});

Route::controller(DoctorSchedulesController::class)->group(function () {
    Route::get('/sched',          'index');
    Route::get('/sched/{id}',     'show');
    Route::post('/sched',         'store');
    Route::put('/sched/{id}',     'update');
    Route::delete('/sched/{id}',  'destroy');
});

Route::controller(StaffsController::class)->group(function () {
    Route::get('/staff',          'index');
    Route::get('/staff/{id}',     'show');
    Route::post('/staff',         'store');
    Route::put('/staff/{id}',     'update');
    Route::delete('/staff/{id}',  'destroy');
});

Route::controller(ReferralsController::class)->group(function () {
    Route::get('/refer',          'index');
    Route::get('/refer/{id}',     'show');
    Route::post('/refer',         'store');
    Route::put('/refer/{id}',     'update');
    Route::delete('/refer/{id}',  'destroy');
});

Route::controller(CheckupsController::class)->group(function () {
    Route::get('/checkup',          'index');
    Route::get('/checkup/{id}',     'show');
    Route::post('/checkup',         'store');
    Route::put('/checkup/{id}',     'update');
    Route::delete('/checkup/{id}',  'destroy');
});