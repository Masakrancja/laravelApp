<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return 'Hello World';
});

Route::get('/test', [TestController::class, 'show']);
