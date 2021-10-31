<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Head\HeadController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Price\PriceController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Rubric\RubricController;
use App\Http\Controllers\Seo\SeoController;
use App\Http\Controllers\Size\SizeController;
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


/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
|
| Menu
|
*/
Route::get('/get-menu/{param}', [MenuController::class, 'getMenu']);


/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
|
| Head->Rubric
|
*/
Route::get('/get-head/{param}', [HeadController::class, 'getHead']);


/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
|
| Rubric
|
*/
Route::get('/get-rubric/{param}', [RubricController::class, 'getRubric']);


/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
|
| Category
|
*/
Route::get('/get-category/{param}', [CategoryController::class, 'getCategory']);


/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
|
| Product
|
*/
Route::get('/get-product/{param}', [ProductController::class, 'getProduct']);



/*
|--------------------------------------------------------------------------
| add
|--------------------------------------------------------------------------
|
| Добавление
|
*/
Route::post('/add-menu', [MenuController::class, 'add']);
Route::post('/add-head', [HeadController::class, 'add']);
Route::post('/add-rubric', [RubricController::class, 'add']);
Route::post('/add-category', [CategoryController::class, 'add']);
Route::post('/add-product', [ProductController::class, 'add']);
Route::post('/add-size', [SizeController::class, 'add']);
Route::post('/add-price', [PriceController::class, 'add']);
Route::post('/add-seo', [SeoController::class, 'add']);
Route::post('/add-text', [TextController::class, 'add']);


/*
|--------------------------------------------------------------------------
| update
|--------------------------------------------------------------------------
|
| Обновление
|
*/
Route::put('/update-menu', [MenuController::class, 'update']);
Route::put('/update-head', [HeadController::class, 'update']);
Route::put('/update-rubric', [RubricController::class, 'update']);
Route::put('/update-category', [CategoryController::class, 'update']);
Route::put('/update-product', [ProductController::class, 'update']);
Route::put('/update-size', [SizeController::class, 'update']);
Route::put('/update-price', [PriceController::class, 'update']);
Route::put('/update-seo', [SeoController::class, 'update']);
Route::put('/update-text', [TextController::class, 'update']);


/*
|--------------------------------------------------------------------------
| delete
|--------------------------------------------------------------------------
|
| Удаление
|
*/
Route::delete('/delete-menu/{id}', [MenuController::class, 'delete']);
Route::delete('/delete-head/{id}', [HeadController::class, 'delete']);
Route::delete('/delete-rubric/{id}', [RubricController::class, 'delete']);
Route::delete('/delete-category/{id}', [CategoryController::class, 'delete']);
Route::delete('/delete-product/{id}', [ProductController::class, 'delete']);
Route::delete('/delete-size/{id}', [SizeController::class, 'delete']);
Route::delete('/delete-price/{id}', [SizeController::class, 'delete']);
Route::delete('/delete-seo/{id}', [SeoController::class, 'delete']);
Route::delete('/delete-text/{id}', [TextController::class, 'delete']);


