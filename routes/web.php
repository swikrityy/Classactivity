<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view ('welcome');
});

Route::get('/about',[FrontendController::class, 'about']);
Route::get('/home',[FrontendController::class, 'home']);
Route::get('/blog',[FrontendController::class, 'blog']); 
Route::get('/contactus',[FrontendController::class, 'contactus']); 
Route::get('/game',[FrontendController::class, 'game']); 


Route::post('/swikrity',[FrontendController::class, 'swikrity']); 
Route::post('/submit',[FrontendController::class, 'submit']); 

Route::post('/register',[FrontendController::class, 'reg']); 
Route::get('/register',[FrontendController::class, 'register']); 

Route::get('/table',[FrontendController::class, 'table']); 