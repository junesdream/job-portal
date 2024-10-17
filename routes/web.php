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
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');

Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
//Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::post('/jobs', [JobController::class, 'store']);


Route::get('/login', function () {
    return view('auth.login'); 
})->name('login');
