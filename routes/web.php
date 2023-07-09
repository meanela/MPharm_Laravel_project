<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\WeatherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum','verified'])->group(function () {Route::get('/', function () {
    $lat=44.81694;
    $lon=15.87083;
    $api_key=config('services.openweather.key');

    $response=Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&cnt=5&appid={$api_key}&units=metric");
    return view('dashboard',[
        'currentWeather'=>$response->json()]);})->name('dashboard');});

Route::middleware(['auth:sanctum','verified'])->get('medicines',[MedicineController::class,'index'])->name('medicines');
Route::middleware(['auth:sanctum','verified'])->get('add_medicine',[MedicineController::class,'create'])->name('add_medicine');
Route::middleware(['auth:sanctum','verified'])->post('store_medicine',[MedicineController::class,'store'])->name('store_medicine');
Route::middleware(['auth:sanctum','verified'])->post('delete_medicine',[MedicineController::class,'delete'])->name('delete_medicine');
Route::middleware(['auth:sanctum','verified'])->post('edit_medicine',[MedicineController::class,'edit'])->name('edit_medicine');
Route::middleware(['auth:sanctum','verified'])->post('update_medicine',[MedicineController::class,'update'])->name('update_medicine');
Route::middleware(['auth:sanctum','verified'])->post('file_add',[MedicineController::class,'file_add'])->name('file_add');
Route::middleware(['auth:sanctum','verified'])->post('process',[MedicineController::class,'process'])->name('process');


Route::middleware(['auth:sanctum','verified'])->get('manufacturers',[ManufacturerController::class,'index'])->name('manufacturers');
Route::middleware(['auth:sanctum','verified'])->get('purchases',[PurchaseController::class,'index'])->name('purchases');

