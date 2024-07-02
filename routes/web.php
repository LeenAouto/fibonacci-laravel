<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FibonacciController;

Route::get('/', function () {
    return view('fibonaccihome');
}); 

Route::get('/fibonacci', [FibonacciController::class, 'show']);
