<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SourceController;
use Illuminate\Support\Facades\Route;
use App\Models\Resources;

Route::get('/', function () {
    $resources = Resources::latest()->take(5)->get();
    return view('welcome', compact('resources'));
})->name('home');

Route::get('/sources', [SourceController::class, 'index'])->name('sources.index');
Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');
Route::get('/resources/{resource}', [ResourceController::class, 'show'])->name('resources.show');
Route::get('/suggest-a-resource', [ResourceController::class, 'suggest'])->name('resources.suggest');
