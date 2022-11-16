<?php
use App\Http\Controllers\pasalController;
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


Route::get('/',[pasalController::class,'index']); 
Route::post('/create', [pasalController::class,'create'])->name('create');
Route::get('/destroy/{id}', [pasalController::class, 'destroy']);
Route::get('/edit/{id}', [pasalController::class, "editItem"]);
Route::post('/edit/{id}', [pasalController::class,'update']);