<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\HomePageController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomePageController::class, 'index'])->name('homePage.home');
Route::get('/dropFile',[HomePageController::class, 'showDropFile'])->name('dropFile.home');
Route::post('/handleDropFile',[HomePageController::class, 'handleDropFile'])->name('handleDropFile.home');
Route::get('/showModalCompare',[HomePageController::class, 'showModalCompare'])->name('showModalCompare.home');
Route::post('/handlerCompare',[HomePageController::class, 'handlerCompare'])->name('handlerCompare.home');
Route::post('/handlerExportFile',[HomePageController::class, 'handlerExportFile'])->name('handlerExport.home');
