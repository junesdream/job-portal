<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return ('hello World!');
});

Route::resource('jobs', JobController::class);
Route::resource('companies', CompanyController::class);
Route::resource('categories', CategoryController::class);
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/companys/{company}', [CompanyController::class, 'show'])->name('companys.show');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categoriess.show');