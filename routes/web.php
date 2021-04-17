<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LmsController;
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
Route::get('/index',[LmsController::class,'index']); 
Route::get('aboutus',[LmsController::class,'aboutus']);  
Route::get('contactus',[LmsController::class,'contactus']);
Route::get('right',[LmsController::class,'right']);