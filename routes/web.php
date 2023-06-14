<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Point\PointComponent;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::view('provinces','admin.backend.pages.province.index');
Route::view('districts','admin.backend.pages.districts.index');
Route::view('buinds','admin.backend.pages.buind.index');
Route::view('municips','admin.backend.pages.municip.index');
Route::view('containers','admin.backend.pages.container.index');
Route::view('containers_images','admin.backend.pages.connection.index');
Route::view('roles-permission','admin.backend.pages.user.index');
Route::view('dashboard','admin.backend.pages.dashboard.index');
Route::view('collect','admin.backend.pages.collect.index');
Route::view('maps','admin.backend.pages.maps.index');
Route::view('users','admin.backend.pages.user.indexw');
Route::view('point','admin.backend.pages.point.index');
Route::view('entities','admin.backend.pages.entity.index');

