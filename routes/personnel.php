<?php


use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ReclamationController;
use Illuminate\Support\Facades\Route;


Route::view('/personnel/login','personnel.login');
Route::post('/personnel/login',[PersonnelController::class,'login']);

Route::post('/store', [PersonnelController::class, 'store']);
Route::get('/personnel/personnel', [PersonnelController::class, 'personnel']);

Route::view('/personnel/reg','personnel.reg');
Route::post('/personnel/reg',[PersonnelController::class,'reg']);


Route::post('/personnel/personnel', [PersonnelController::class, 'login']);

Route::get('/login', function () {
    return view('personnel.login');
});
Route::get('gesRecla', [ReclamationController::class, 'gesRecla']);

Route::post('/update/{id}', [ReclamationController::class, 'update'])->name('update.reclamation');