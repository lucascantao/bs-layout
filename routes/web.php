<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectorController;

Route::get('/', function () {
    return view('layouts.portarias.search');
});

// Setores
Route::get('/sector', [SectorController::class, 'index'])->name('sector.index');
Route::get('/sector/create', [SectorController::class, 'create'])->name('sector.create');
Route::post('/sector', [SectorController::class, 'store'])->name('sector.store');
Route::get('/sector/{sector}/edit', [SectorController::class, 'edit'])->name('sector.edit');
Route::put('/sector/{sector}/update', [SectorController::class, 'update'])->name('sector.update');
