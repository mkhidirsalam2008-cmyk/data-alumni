<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

Route::get('/', function () {
    return view('home');
});

Route::get('/form-alumni', function () {
    return view('alumni.form');
});

Route::post('/alumni', [AlumniController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard',
        [AlumniController::class, 'index']
    )->name('dashboard');

});
Route::get('/berhasil', function () {

    if (!session('success')) {
        return redirect('/');
    }

    return view('alumni.berhasil');

})->name('alumni.berhasil');
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AlumniController::class, 'index']);

    Route::get('/alumni/{id}', [AlumniController::class, 'show']);

});