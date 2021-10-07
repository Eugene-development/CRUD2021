<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Head\HeadController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Rubric\RubricController;
use App\Http\Controllers\Seo\SeoController;
use App\Http\Controllers\Text\TextController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| getOne
|--------------------------------------------------------------------------
|
| Получить одно значение по параметру
|
*/
Route::get('/get-one-menu/{id}', [MenuController::class, 'getOne']);
Route::get('/get-one-head/{id}', [HeadController::class, 'getOne']);
Route::get('/get-one-rubric/{id}', [RubricController::class, 'getOne']);
Route::get('/get-one-category/{id}', [CategoryController::class, 'getOne']);
Route::get('/get-one-product/{id}', [ProductController::class, 'getOne']);
Route::get('/get-one-seo/{id}', [SeoController::class, 'getOne']);
Route::get('/get-one-text/{id}', [TextController::class, 'getOne']);


/*
|--------------------------------------------------------------------------
| getAll
|--------------------------------------------------------------------------
|
| Получить все значения
|
*/
Route::get('/get-all-menu/', [MenuController::class, 'getAll']);
Route::get('/get-all-head/', [HeadController::class, 'getAll']);
Route::get('/get-all-rubric/', [RubricController::class, 'getAll']);
Route::get('/get-all-category/', [CategoryController::class, 'getAll']);
Route::get('/get-all-product/', [ProductController::class, 'getAll']);
Route::get('/get-all-seo/', [SeoController::class, 'getAll']);
Route::get('/get-all-text/', [TextController::class, 'getAll']);


