<?php

use App\Events\UserRegistered;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {

    return Marca::with('autos')->get();

    // $q = User::query();
    // $users =  $q->name('facundo')->get();
    // return $users;
});
