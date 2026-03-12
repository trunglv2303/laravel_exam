<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('/users', [UserController::class, 'store']);
Route::post('/updateusers/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');
Route::get('/users/{id}', [UserController::class, 'getuserbyid']);
Route::get('/usersall', [UserController::class, 'getalluser']);
Route::get('/getusereditbyid/{id}', [UserController::class, 'getusereditbyid'])
    ->name('getusereditbyid');
