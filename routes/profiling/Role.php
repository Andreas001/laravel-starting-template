<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes for Roles
|--------------------------------------------------------------------------
*/

Route::apiResource('roles', 'Profiling\RoleController');