<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function(){
    return view('form');

});

Route::post('/saveForm', [formController::class,'store']);
