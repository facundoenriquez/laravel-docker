<?php

use App\Events\UserRegistered;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {

    UserRegistered::dispatch('Evento disparado');

    return 'Hola Mundo con Laravel';
});