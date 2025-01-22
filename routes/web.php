<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GradeController;
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

    Route::get('/admin/grades', [GradeController::class, 'index']);
    Route::post('/admin/grades/save', [GradeController::class, 'save']);
    Route::post('/admin/grades/update', [GradeController::class, 'update']);
    Route::post('/admin/grades/delete', [GradeController::class, 'delete']);

    Route::get('/admin/documents', function () {
        return view('admin.documents');
    })->name('admin-documents');

    Route::get('/admin/grade_wise_documents', function () {
        return view('admin.grade_wise_documents');
    })->name('admin-grade_wise_documents');

    Route::get('/admin/academic_year', function () {
        return view('admin.academic_year');
    })->name('admin-academic_year');

    Route::get('/admin/admission_notice', function () {
        return view('admin.admission_notice');
    })->name('admin-admission_notice');

    Route::get('/admin/application', function () {
        return view('admin.application');
    })->name('admin-application');

});

Route::middleware(['auth', 'student', 'verified'])->group(function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student-dashboard');
});

require __DIR__.'/auth.php';
