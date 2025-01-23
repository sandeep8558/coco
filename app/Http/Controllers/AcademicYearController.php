<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AcademicYearRequest;
use App\Models\AcademicYear;


class AcademicYearController extends Controller
{
    //
    public function index(Request $request){

        $academicyear = null;
        if(isset($request->id)){
            $academicyear = AcademicYear::find($request->id);
        }
        $academicyears = AcademicYear::simplePaginate(10);
        return view('admin.academic_year', compact('academicyears', 'academicyear'));
    }

    public function save(AcademicYearRequest $request){
        AcademicYear::create($request->all());
        return back();
    }

    public function update(AcademicYearRequest $request){
        $academicyear = AcademicYear::find($request->id);
        $academicyear->update($request->all());
        return redirect("/admin/academic_year");
    }

    public function delete(Request $request){
        $academicyear = AcademicYear::find($request->id);
        $academicyear->delete();
        return redirect("/admin/academic_year");
    }
}
