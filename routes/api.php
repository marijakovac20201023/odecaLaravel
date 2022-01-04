<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OdecaController;
use App\Http\Controllers\PorudzbinaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);




Route::group(['middleware' => ['auth:sanctum']], function () {//ako je korisnik ulogovan moze da vrsi operacije dodavanja, azuriranja i brisanja
    Route::get('/profiles', function (Request $request) { //ovo nam omogucava da prikazemo ulogovanog korisnika
        return auth()->user();
    });
  //  Route::delete('porudzbine/{id}',[PorudzbinaController::class,'destroy']);
    Route::resource('porudzbine', PorudzbinaController::class)->only(['update', 'store', 'destroy']);
    Route::resource('odeca', OdecaController::class)->only(['update', 'store', 'destroy']);
   

    Route::post('/logout', [AuthController::class, 'logout']); //ako je korisnik ulogovan moze da se odjavi
});
//metode koje mogu da vide svi korisnici
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);

Route::get('odeca',[OdecaController::class,'index']);
Route::get('odeca/{id}',[OdecaController::class,'show']);

Route::get('porudzbine',[PorudzbinaController::class,'index']);
Route::get('porudzbine/{id}',[PorudzbinaController::class,'show']);