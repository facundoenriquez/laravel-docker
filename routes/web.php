<?php

use App\Events\UserRegistered;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {

    $user = User::find(1);
    Gate::forUser($user)->authorize('isAdmin');
    return $user;
});
