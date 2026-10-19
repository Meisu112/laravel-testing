<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);

Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/profile/edit', [AuthController::class, 'editProfile'])
    ->middleware('auth');

Route::post('/profile/update', [AuthController::class, 'updateProfile'])
    ->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard', [
        'user' => auth()->user(),
    ]);
})->middleware('auth');
Route::get('/password/change', [
    AuthController::class,
    'showChangePassword'
])->middleware('auth');

Route::post('/password/change', [
    AuthController::class,
    'updatePassword'
])->middleware('auth');

