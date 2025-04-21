<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::any('add-user', [UserController::class, 'index'])->name('user.add_user');

