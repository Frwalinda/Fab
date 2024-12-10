<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
Route::get('/', function () {
    return redirect('/admin/login');
});
Route::get('/api/services', [ServiceController::class, 'index']);

