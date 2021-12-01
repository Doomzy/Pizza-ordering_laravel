<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


Route::get('/', function () {
    return view('index');
});
Route::get('pizzas', [PizzaController::class,'index']);
Route::get('pizzas/create', [PizzaController::class,'create']);
Route::post('pizzas/create', [PizzaController::class,'add']);
Route::get('pizzas/delete/{id}', [PizzaController::class,'delete']);
Route::get('pizzas/update/{id}', [PizzaController::class,'updateView']);
Route::post('pizzas/update/{id}', [PizzaController::class,'update']);
Route::get('pizzas/{id}', [PizzaController::class,'details']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
