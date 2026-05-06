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
Route::post('/submit',[FrontendController::class, 'submit']); 
