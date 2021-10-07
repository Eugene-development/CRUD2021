<?php

use App\Http\Controllers\Head\HeadController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| getOne
|--------------------------------------------------------------------------
|
| Получить одно по параметру
|
*/
Route::get('/get-one-menu/{id}', [MenuController::class, 'getOne']);
Route::get('/get-one-head/{id}', [HeadController::class, 'getOne']);
Route::get('/get-one-rubric/{id}', [ProductController::class, 'getOne']);
Route::get('/get-one-category/{id}', [ProductController::class, 'getOne']);
Route::get('/get-one-product/{id}', [ProductController::class, 'getOne']);
Route::get('/get-one-seo/{id}', [ProductController::class, 'getOne']);
Route::get('/get-one-text/{id}', [ProductController::class, 'getOne']);
