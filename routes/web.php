<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/all', [Customer::class, 'index']);
Route::get('/customer/{customer_id}', [Customer::class, 'show']);
Route::get('/update/{customer_id}', [Customer::class, 'update']);
Route::get('/delete/{customer_id}', [Customer::class, 'delete']);