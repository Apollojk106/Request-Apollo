<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;
use App\Http\Controllers\RequestController;


Route::get('/',[FormController::class,'index']);
Route::get('/form',[FormController::class, 'index']);

Route::post('/request',[RequestController::class, 'RequestForm']);

