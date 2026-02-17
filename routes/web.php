<?php

use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;
use App\Models\Resources;

Route::get('/', function () {
    $resources = Resources::latest()->take(5)->get();
    return view('welcome', compact('resources'));
})->name('home');

Route::get('/resources', [ResourceController::class, 'index'])->name('resources.index');
Route::get('/suggest-a-resource', [ResourceController::class, 'suggest'])->name('resources.suggest');
