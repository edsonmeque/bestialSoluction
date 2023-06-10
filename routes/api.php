<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Api\AuthController;
use App\Http\Controllers\Admin\Api\ColectController;
use App\Http\Controllers\Admin\Api\ComputeBetweenToPointController;


// route of authetication
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::post('image-receved',[ComputeBetweenToPointController::class,'recevedImage' ]);
Route::post('change_container',[ColectController::class,'changeContainer' ])->middleware('auth:sanctum');
Route::get('point',[ColectController::class,'getAllPont' ])->middleware('auth:sanctum');
Route::get('list_containers_status_2_4',[ColectController::class,'list_container_with_status'])->middleware('auth:sanctum');
Route::get('list_containers_desibleted',[ColectController::class,'list_container_with_status_5'])->middleware('auth:sanctum');
Route::get('user_auth',[AuthController::class,'index'])->middleware('auth:sanctum');
