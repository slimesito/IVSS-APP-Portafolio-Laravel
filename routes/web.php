<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PensionadoController;

Route::get('/', [PensionadoController::class, 'index'] )->name('index');

Route::get('/search', [PensionadoController::class, 'search'] );

Route::get('/create', [PensionadoController::class, 'create'])->name('create');

Route::post('/upload', [PensionadoController::class, 'upload'])->name('upload');

Route::get('/update/{id}', [PensionadoController::class, 'update'])->name('update');

Route::post('/edit/{id}',[PensionadoController::class,'edit'])->name('edit');
