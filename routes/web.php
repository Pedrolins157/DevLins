<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('/layout/app');
});
Route::Post('create', [ContactController::class, 'create'])->name("create-contact");


