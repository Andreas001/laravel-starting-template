<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes for Companies
|--------------------------------------------------------------------------
*/

Route::apiResource('users', 'Profiling\UserController');