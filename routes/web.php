<?php

use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerifyController;
use App\Mail\SingInMailable;
use App\Models\User;
use Illuminate\Support\Facades\Route;



//RUTAS USUARIOS
Route::view('/', 'login')->name('login'); 
Route::post('/user/singIn', [AuthController::class, 'singIn'])->name('auth.singIn');

Route::get('/user/register', [UserController::class, 'showRegister'])->name('user.register'); 
Route::post('/user/register/validate', [UserController::class, 'validateRegister'])->name('user.register.validate');

Route::get('/user/add', [UserController::class, 'add'])->name('user.add');

Route::get('/home', [UserController::class, 'home'])->name('home');

//RUTAS PUBLICACIONES
Route::get('/publicacion/create', [PublicacionController::class, 'create'])->name('publicacion.create');


//RUTAS VERIFICACION EMAIL
Route::get('/verify/email', [VerifyController::class, 'sendEmailVerify'])->name('verify.email');
Route::post('/verify/email/submit', [VerifyController::class, 'emailVerify'])->name('verify.email.submit');

