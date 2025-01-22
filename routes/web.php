<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Route::get('/admission', function () {
    return view('web.admission');
});

Route::get('/dashboard', function () {
    if(Auth::user()->role == "Administrator"){
        return redirect('/admin/dashboard');
    } else if(Auth::user()->role == "Student") {
        return redirect('/student/dashboard');
    } else {
        Auth::logout();
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin-dashboard');
});

Route::middleware(['auth', 'student', 'verified'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student-dashboard');
});

require __DIR__.'/auth.php';
