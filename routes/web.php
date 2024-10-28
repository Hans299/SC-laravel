<?php

use App\Http\Controllers\fitur1Controller;
use App\Http\Controllers\FrontUserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\tampilanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes([
    'register' => false, // Nonaktifkan pendaftaran
]);


Route::middleware('auth')->group(function () {
    Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/landing', [tampilanController::class, 'landing']);
        Route::get('/create', [tampilanController::class, 'fitur1'])->name('create');
        Route::get('/show', [fitur1Controller::class, 'show'])->name('show');
        Route::post('/saving', [fitur1Controller::class, 'saving'])->name('saving');
        Route::get('/fitur1/edit/{id}', [fitur1Controller::class, 'edit']);
        Route::post('/update/{id}', [fitur1Controller::class, 'update'])->name('update');
        Route::get('/fitur1/hapus/{id}', [fitur1Controller::class, 'delete']);
        Route::put('/status/{id}', [fitur1Controller::class, 'status'])->name('update-status');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontUserController::class, 'homepage']);
Route::get('/detail/{id}', [FrontUserController::class, 'detail']);
