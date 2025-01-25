<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AdmissionNoticeController;
use App\Http\Controllers\GradeWiseDocumentController;
use App\Models\AdmissionNotice;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Route::get('/admission', function () {
    $today = date('Y-m-d');
    $admission_notices = AdmissionNotice::where('end_date', '>=', $today)->get();
    return view('web.admission', compact('admission_notices'));
});

Route::get('/online_application/{id}', function ($id) {
    return view('web.online_application');
});

Route::get('/web/home/about', function () {
    return view('web.home.about');
})->name('about');

Route::get('/web/home/contact', function () {
    return view('web.home.contact');
})->name('contact');

Route::get('/web/home/facilities', function () {
    return view('web.home.facilities');
})->name('facilities');

Route::get('/web/home/program', function () {
    return view('web.home.program');
})->name('program');

Route::get('/web/home/gallery', function () {
    return view('web.home.gallery');
})->name('gallery');

Route::get('/web/home/contact', function () {
    return view('web.home.contact');
})->name('contact');

Route::get('/web/home/try', function () {
    return view('web.home.try');
})->name('try');


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

    Route::get('/admin/documents',[DocumentController::class,'index']);
    Route::post('/admin/documents/save',[DocumentController::class,'save']);
    Route::post('/admin/documents/update',[DocumentController::class,'update']);
    Route::post('/admin/documents/delete',[DocumentController::class,'delete']);

  
    Route::get('/admin/grade_wise_documents',[GradeWiseDocumentController::class,'index']);
    Route::post('/admin/grade_wise_documents/save',[GradeWiseDocumentController::class,'save']);
    Route::post('/admin/grade_wise_documents/update',[GradeWiseDocumentController::class,'update']);
    Route::post('/admin/grade_wise_documents/delete',[GradeWiseDocumentController::class,'delete']);


    Route::get('/admin/academic_year',[AcademicYearController::class,'index']);
    Route::post('/admin/academic_year/save',[AcademicYearController::class,'save']);
    Route::post('/admin/academic_year/update',[AcademicYearController::class,'update']);
    Route::post('/admin/academic_year/delete',[AcademicYearController::class,'delete']);



    // Route::get('/admin/admission_notice', function () {
    //     return view('admin.admission_notice');
    // })->name('admin-admission_notice');

    Route::get('/admin/admission_notice',[AdmissionNoticeController::class,'index']);
    Route::post('/admin/admission_notice/save',[AdmissionNoticeController::class,'save']);
    Route::post('/admin/admission_notice/update',[AdmissionNoticeController::class,'update']);
    Route::post('/admin/admission_notice/delete',[AdmissionNoticeController::class,'delete']);






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
