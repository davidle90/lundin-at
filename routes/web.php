<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('public/Index');
})->name('index');

Route::get('admin', function () {
    return Inertia::render('admin/Dashboard');
})->middleware(['auth', 'verified'])->name('admin.index');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
