<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/editarusuarios/{id}', [UserController::class, 'mkchato']);
Route::get('/listausuarios', [UserController::class, 'lista']);
Route::get('/apagarusuario/{id}', [UserController::class, 'apagarusuario']);
Route::post('/postdoformulario', [UserController::class, 'postformulario']);
Route::get('/formulario', [UserController::class, 'formulario']);
Route::post('/updatedeusuario/{id}', [UserController::class, 'update']);

