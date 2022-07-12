<?php

use App\Http\Controllers\DefualtController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_front', [DefualtController::class, 'Default']);
Route::get('/Rensyuu', [DefualtController::class, 'Rensyuu']);
Route::get('/Rensyuu2', [DefualtController::class, 'Rensyuu2']);
Route::get('/test_table', [DefualtController::class, 'test_table']);
Route::get('/test_coordinate', [DefualtController::class, 'Test_Coordinate']);
Route::get('/test_form', [DefualtController::class, 'Test_Form']);
Route::get('/oekaki',[DefualtController::class, 'Oekaki']);
Route::post('/register',[DefualtController::class, 'Test_Form']);

/*ここからU22用*/
//Home用
Route::get('/home', [DefualtController::class, 'Home']);
//memo用
Route::get('/memo', [DefualtController::class, 'Memo']);
Route::post('/register',[DefualtController::class, 'Memo']);

//↓これ消さないでおいて
Auth::routes();
Route::get('/welcome', [DefualtController::class, 'welcome']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
