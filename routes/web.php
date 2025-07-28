<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

Route::get('test', function () {
    return view('test');
});

Route::middleware('throttle:10,1')->group(function () {

    Route::resources(
        [
            'posts' => PostController::class,
            'comments' => CommentController::class,
        ]
    );
}
);


