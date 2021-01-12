<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CitysController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\WorkerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/city', [CityController::class, 'city_show']);
Route::get('/T1', [TestController::class, 'test_show']);
// Route::view('/citys','city');


// Route::get('/city_add', function () {
//     return view('city.create');
// });

// Route::get('/citys' , [CitysController::class,'index']);
// Route::get('/city_add' , [CitysController::class,'create']);
// Route::post('/city_store' , [CitysController::class,'store']);

Route::resource('/citys',CitysController::class);

// Route::get('/national',[NationalController::class,'index']);
// Route::get('/national_add',[NationalController::class,'create']);

Route::resource('/nal',NationalController::class);

Route::resource('/work',WorkerController::class);
